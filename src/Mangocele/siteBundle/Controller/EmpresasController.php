<?php

namespace Mangocele\siteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mangocele\siteBundle\Controller\DefaultController;

class EmpresasController extends Controller
{
    private function getCategories(){
        return array('Artesania','Textil','Madera','Alimentos','Servicios','Artesania','Textil','Madera','Alimentos','Servicios','Artesania','Textil','Madera','Alimentos','Servicios','Artesania','Textil','Madera','Alimentos','Servicios');
    }

    public function mainAction($slug)
    {

        $empresa_1_data = array(
            "img" => "images/logo-placeholder-2.jpg",
            'nombre'=>'negocio-1',
            'descripcion'=> '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue mollis justo, eu imperdiet turpis vestibulum quis.</p> <p>Duis nisl enim, tincidunt ut lacus at, ultrices tempor augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> <p> Curabitur felis arcu, faucibus in egestas a, venenatis vitae ligula. Vestibulum tempor est tellus, ut bibendum mi ullamcorper sit amet. Aliquam congue id leo suscipit venenatis. Nullam nec pharetra dolor, id semper nulla. Donec scelerisque bibendum felis et cursus. Mauris at magna a neque aliquam vehicula. Suspendisse sed enim nisl.</p>',
            'direccion'=>'San Rafael, Escazu',
            'facebook'=>'facebook.com',
            'mapa_x'=>'',
            'mapa_y'=>'',
            'telefono'=>'7176-5072',
            'email'=>'amorgan115@gmail.com',
            'productos'=>'',
        );

        $empresa_2_data = array(
            "img" => "images/logo-placeholder-1.jpg",
            'nombre'=>'negocio-2',
            'descripcion'=> '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue mollis justo, eu imperdiet turpis vestibulum quis.</p> <p>Duis nisl enim, tincidunt ut lacus at, ultrices tempor augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> <p> Curabitur felis arcu, faucibus in egestas a, venenatis vitae ligula. Vestibulum tempor est tellus, ut bibendum mi ullamcorper sit amet. Aliquam congue id leo suscipit venenatis. Nullam nec pharetra dolor, id semper nulla. Donec scelerisque bibendum felis et cursus. Mauris at magna a neque aliquam vehicula. Suspendisse sed enim nisl.</p>',
            'direccion'=>'Guachipelin, Escazu',
            'facebook'=>'facebook.com/negocio',
            'mapa_x'=>'',
            'mapa_y'=>'',
            'telefono'=>'7176-5072',
            'email'=>'amorgan115@gmail.com',
            'productos'=>'',
        );

        if($slug=='negocio-1'){
            $comercio = $empresa_1_data;
        }else{
            $comercio = $empresa_2_data;
        }

        $form = $this->createFormBuilder()
            ->add('Nombre', 'text')
            ->add('Email', 'text')
            ->add('Telefono', 'text')
            ->add('Mensaje', 'textarea')
            ->add('Enviar', 'submit')
            ->getForm();

        return $this->render('MangoceleSiteBundle:Empresas:main.html.twig',array(
            'empresa_data' => $comercio,
            'categorias' => $this->getCategories(),
            'contact' => $form->createView()
        ));
    }

}
