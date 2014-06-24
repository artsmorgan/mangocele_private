<?php

namespace Mangocele\coreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mangocele\coreBundle\Entity\Productos;
use Mangocele\coreBundle\Entity\Categorias;
use Mangocele\coreBundle\Entity\SubCategorias;
use Mangocele\coreBundle\Form\ProductosType;

/**
 * Productos controller.
 *
 */
class ProductosController extends Controller
{

    /**
     * Lists all Productos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MangocelecoreBundle:Productos')->findAll();

        return $this->render('MangocelecoreBundle:Productos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Productos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Productos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            //print_r($request);
            //die();
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_productos_edit', array('id' => $entity->getId())));
        }

        return $this->render('MangocelecoreBundle:Productos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Productos entity.
    *
    * @param Productos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Productos $entity)
    {
        $form = $this->createForm(new ProductosType(), $entity, array(
            'action' => $this->generateUrl('admin_productos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Productos entity.
     *
     */
    public function newAction()
    {
        $entity = new Productos();
        $form   = $this->createCreateForm($entity);

        return $this->render('MangocelecoreBundle:Productos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Productos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MangocelecoreBundle:Productos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Productos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MangocelecoreBundle:Productos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Productos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MangocelecoreBundle:Productos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Productos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MangocelecoreBundle:Productos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Productos entity.
    *
    * @param Productos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Productos $entity)
    {
        $form = $this->createForm(new ProductosType(), $entity, array(
            'action' => $this->generateUrl('admin_productos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Productos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MangocelecoreBundle:Productos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Productos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_productos_edit', array('id' => $id)));
        }

        return $this->render('MangocelecoreBundle:Productos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Productos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MangocelecoreBundle:Productos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Productos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_productos'));
    }

    public function categoriasAction(Request $request, $id){

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MangocelecoreBundle:Productos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Productos entity.');
        }

        $categorias = $em->getRepository('MangocelecoreBundle:Categorias')->findAll();
        $subcategorias = $em->getRepository('MangocelecoreBundle:SubCategorias')->findAll();


        return $this->render('MangocelecoreBundle:Productos:categorias.html.twig', array(
            'entity'      => $entity,
            'categorias'  => $categorias,
            'subcategorias'  => $subcategorias,
        ));
    }

    /**
     * Creates a form to delete a Productos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_productos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
