<?php

namespace Mangocele\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mangocele\UserBundle\Entity\User;
use Mangocele\UserBundle\Form\UserType;


/**
 * User controller.
 *
 */
class UserController extends Controller
{

    /**
     * Lists all User entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MangoceleUserBundle:User')->findAll();

        return $this->render('MangoceleUserBundle:User:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new User entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new User();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $form_data = $request->get('mangocele_userbundle_user');
            //print_r($request->get('mangocele_userbundle_user'));die();
            $userManager = $this->container->get('fos_user.user_manager');
            $user = $userManager->createUser();

                $user->setEmail($form_data['email']);
                $user->setUsername($form_data['email']);
                $user->setPlainPassword($form_data['password']);
                $user->setEnabled(true);
                $user->setRoles( $form_data['roles'] );
                $user->setNombre($form_data['nombre']);
                $user->setApellido1($form_data['apellido1']);
                $user->setApellido2($form_data['apellido2']);
                $user->setEmpresa($form_data['empresa']);
                $user->setPais($form_data['pais']);
                $user->setTelefono($form_data['telefono']);

            $userManager->updateUser($user);


            $em = $this->getDoctrine()->getManager();
            $entities = $em->getRepository('MangoceleUserBundle:User')->findAll();
            return $this->render('MangoceleUserBundle:User:index.html.twig', array(
                'entities' => $entities,
            ));
        }

        return $this->render('MangoceleUserBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a User entity.
    *
    * @param User $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('user_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new User entity.
     *
     */
    public function newAction()
    {
        $entity = new User();
        $form   = $this->createCreateForm($entity);

        return $this->render('MangoceleUserBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a User entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MangoceleUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MangoceleUserBundle:User:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MangoceleUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MangoceleUserBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'updated'     => false
        ));
    }

    /**
    * Creates a form to edit a User entity.
    *
    * @param User $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('user_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing User entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MangoceleUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $form_data = $request->get('mangocele_userbundle_user');
            //print_r($user_data); die();
            $userManager = $this->get('fos_user.user_manager');
            $user = $userManager->findUserByEmail('mango@mangocele.cr');

                $user->setEmail($form_data['email']);
                $user->setUsername($form_data['email']);
                if(!$form_data['password'])
                    $user->setPlainPassword($form_data['password']);
                //$user->setEnabled(true);
                $user->setRoles( $form_data['roles'] );
                $user->setNombre($form_data['nombre']);
                $user->setApellido1($form_data['apellido1']);
                $user->setApellido2($form_data['apellido2']);
                $user->setEmpresa($form_data['empresa']);
                $user->setPais($form_data['pais']);
                $user->setTelefono($form_data['telefono']);

            $userManager->updateUser($user);
            //$em->flush();
            return $this->redirect($this->generateUrl('user_edit', array('id' => $id,'updated'=>true)));
        }

        return $this->render('MangoceleUserBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'updated'     => false
        ));
    }
    /**
     * Deletes a User entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MangoceleUserBundle:User')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find User entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('user'));
    }

    /**
     * Creates a form to delete a User entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar Usuario'))
            ->getForm()
        ;
    }
}
