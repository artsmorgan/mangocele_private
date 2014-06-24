<?php

namespace Mangocele\coreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mangocele\coreBundle\Entity\Categorias;
use Mangocele\coreBundle\Form\CategoriasType;

/**
 * Categorias controller.
 *
 */
class CategoriasController extends Controller
{

    /**
     * Lists all Categorias entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MangocelecoreBundle:Categorias')->findAll();

        return $this->render('MangocelecoreBundle:Categorias:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Categorias entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Categorias();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_categorias_show', array('id' => $entity->getId())));
        }

        return $this->render('MangocelecoreBundle:Categorias:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Categorias entity.
    *
    * @param Categorias $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Categorias $entity)
    {
        $form = $this->createForm(new CategoriasType(), $entity, array(
            'action' => $this->generateUrl('admin_categorias_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Categorias entity.
     *
     */
    public function newAction()
    {
        $entity = new Categorias();
        $form   = $this->createCreateForm($entity);

        return $this->render('MangocelecoreBundle:Categorias:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Categorias entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MangocelecoreBundle:Categorias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorias entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MangocelecoreBundle:Categorias:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Categorias entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MangocelecoreBundle:Categorias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorias entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MangocelecoreBundle:Categorias:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Categorias entity.
    *
    * @param Categorias $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Categorias $entity)
    {
        $form = $this->createForm(new CategoriasType(), $entity, array(
            'action' => $this->generateUrl('admin_categorias_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Categorias entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MangocelecoreBundle:Categorias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorias entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_categorias_edit', array('id' => $id)));
        }

        return $this->render('MangocelecoreBundle:Categorias:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Categorias entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MangocelecoreBundle:Categorias')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Categorias entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_categorias'));
    }

    /**
     * Creates a form to delete a Categorias entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_categorias_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
