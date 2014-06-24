<?php

namespace Mangocele\siteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductoController extends Controller
{
    private function getCategories(){
        return array('Artesanías','Artículos para el hogar','Bisutería','Bolsos/Carteras','Comidas empacadas','Joyería ','Juguetes ','Muebles','Papelería','Plantas','Productos belleza ','Productos mascotas','Repostería','Ropa Hombre','Ropa Mujer','Ropa Niño','Ropa Bebe','Servicio Educación','Servicio Eventos','Servicios para el Hogar','Vestidos de baño','Fotografía','Arte','Salud');
    }

    public function mainAction($slug)
    {
        $empresa_description = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam congue mollis justo, eu imperdiet turpis vestibulum quis.</p> <p>Duis nisl enim, tincidunt ut lacus at, ultrices tempor augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> <p> Curabitur felis arcu, faucibus in egestas a, venenatis vitae ligula. Vestibulum tempor est tellus, ut bibendum mi ullamcorper sit amet. Aliquam congue id leo suscipit venenatis. Nullam nec pharetra dolor, id semper nulla. Donec scelerisque bibendum felis et cursus. Mauris at magna a neque aliquam vehicula. Suspendisse sed enim nisl.</p>';

        $form = $this->createFormBuilder()
            ->add('Nombre', 'text')
            ->add('Email', 'text')
            ->add('Telefono', 'text')
            ->add('Mensaje', 'textarea')
            ->add('Enviar', 'submit')
            ->getForm();

        $pedido = $this->createFormBuilder()
            ->add('Nombre', 'text')
            ->add('Email', 'text')
            ->add('Telefono', 'text')
            ->add('Cantidad', 'text')
            ->add('Notas', 'textarea')
            ->add('Enviar', 'submit')
            ->getForm();

        return $this->render('MangoceleSiteBundle:Producto:main.html.twig',array(
            'data' => $slug,
            'descripcion' => $empresa_description,
            'categorias' => $this->getCategories(),
            'contact' => $form->createView(),
            'pedido' => $pedido->createView()
        ));
    }

}
