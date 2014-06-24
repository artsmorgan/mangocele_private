<?php

namespace Mangocele\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class loginController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MangoceleUserBundle:Clientes')->findAll();

        return $this->render('MangoceleUserBundle:Clientes:index.html.twig', array(
            'entities' => $entities,
        ));
    }
}
