<?php

namespace Mangocele\siteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    private function getCategories(){
      return array('Artesanías','Artículos para el hogar','Bisutería','Bolsos/Carteras','Comidas empacadas','Joyería ','Juguetes ','Muebles','Papelería','Plantas','Productos belleza ','Productos mascotas','Repostería','Ropa Hombre','Ropa Mujer','Ropa Niño','Ropa Bebe','Servicio Educación','Servicio Eventos','Servicios para el Hogar','Vestidos de baño','Fotografía','Arte','Salud');
    }

    private function getEmpresas(){
        return array(
            array(
                "nombre" => "Negocio 1",
                "img" => "images/logo-placeholder-2.jpg",
                "url" => "/empresa/negocio-1",
                "desc"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam risus nibh, mattis eu luctus id, ullamcorper ac augue. Ut fermentum ac urna id elementum. Ut id eros fermentum, rutrum lacus a, molestie enim.Nombre de la Empresa"
            ),
            array(
                "nombre" => "Negocio 2",
                "img" => "images/logo-placeholder-1.jpg",
                "url" => "/empresa/negocio-2",
                "desc"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam risus nibh, mattis eu luctus id, ullamcorper ac augue. Ut fermentum ac urna id elementum. Ut id eros fermentum, rutrum lacus a, molestie enim.Nombre de la Empresa"
            )
        );
    }

    public function indexAction()
    {

        $data_categories = $this->getCategories();
        $data_companies  = $this->getEmpresas();

        return $this->render('MangoceleSiteBundle:Default:index.html.twig',array(
            'categories' => $data_categories,
            'comercios' => $data_companies
        ));
    }


    public function conocenosAction(){

        $data = 'test';

        return $this->render('MangoceleSiteBundle:Default:conocenos.html.twig',array(
            'data' => $data
        ));
    }

    public function categoriasAction(){
        $data_categories = $this->getCategories();

        $data = 'test';

        return $this->render('MangoceleSiteBundle:Default:categorias_listado.html.twig',array(
            'data' => $data,
            'categorias' => $data_categories
        ));
    }

    public function empresasAction(){

        $data = 'test';
        $data_companies  = $this->getEmpresas();

        return $this->render('MangoceleSiteBundle:Default:empresas_listado.html.twig',array(
            'data' => $data,
            'comercios' => $data_companies
        ));
    }

    public function contactenosAction(){

        $data = 'test';

        $form = $this->createFormBuilder()
            ->add('Nombre_Completo', 'text')
            ->add('Email', 'text')
            ->add('Telefono', 'text')
            ->add('Direccion', 'textarea')
            ->add('Empresa', 'text')
            ->add('Comentarios', 'textarea')
            ->add('Enviar', 'submit')
            ->getForm();

        return $this->render('MangoceleSiteBundle:Default:contactenos.html.twig',array(
            'data' => $data,
            'form' => $form->createView()
        ));
    }

}
