<?php

namespace Mangocele\siteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsuarioController extends Controller
{
    private function getCategories(){
        return array('Artesania','Textil','Madera','Alimentos');
    }
    public function mainAction()
    {
        return $this->render('MangoceleSiteBundle:Usuario:main.html.twig',array(
            'categorias'=> $this->getCategories()
        ));
    }

}
