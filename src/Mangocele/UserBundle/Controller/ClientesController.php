<?php

namespace Mangocele\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mangocele\UserBundle\Entity\Clientes;
use Mangocele\UserBundle\Form\ClientesType;

/**
 * Clientes controller.
 *
 * @Route("/clientes")
 */
class ClientesController extends Controller
{

    /**
     * Lists all Clientes entities.
     *
     * @Route("/", name="clientes")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT u FROM Mangocele\UserBundle\Entity\Clientes u');
        $users = $query->getResult();

        //$entities = $em->getRepository('MangoceleUserBundle:Clientes')->findAll();

        return array(
            'entities' => $users,
        );
    }
    /**
     * Creates a new Clientes entity.
     *
     * @Route("/", name="clientes_create")
     * @Method("POST")
     * @Template("MangoceleUserBundle:Clientes:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Clientes();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('clientes_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Clientes entity.
    *
    * @param Clientes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Clientes $entity)
    {
        $form = $this->createForm(new ClientesType(), $entity, array(
            'action' => $this->generateUrl('clientes_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Clientes entity.
     *
     * @Route("/new", name="clientes_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Clientes();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Clientes entity.
     *
     * @Route("/{id}", name="clientes_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MangoceleUserBundle:Clientes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clientes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Clientes entity.
     *
     * @Route("/{id}/edit", name="clientes_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MangoceleUserBundle:Clientes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clientes entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Clientes entity.
    *
    * @param Clientes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Clientes $entity)
    {
        $form = $this->createForm(new ClientesType(), $entity, array(
            'action' => $this->generateUrl('clientes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Clientes entity.
     *
     * @Route("/{id}", name="clientes_update")
     * @Method("PUT")
     * @Template("MangoceleUserBundle:Clientes:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MangoceleUserBundle:Clientes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clientes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('clientes_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Clientes entity.
     *
     * @Route("/{id}", name="clientes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MangoceleUserBundle:Clientes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Clientes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('clientes'));
    }

    /**
     * Creates a form to delete a Clientes entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('clientes_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
