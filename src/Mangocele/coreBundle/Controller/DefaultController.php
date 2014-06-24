<?php

namespace Mangocele\coreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MangocelecoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
