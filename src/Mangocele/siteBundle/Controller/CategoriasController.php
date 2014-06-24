<?php

namespace Mangocele\siteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriasController extends Controller
{

    private function getProductListByCategory($category){
        return array();
    }

    private function getCompanyListByCategory($category){
        return array('productos');
    }

    private function getEmpresas(){
        return array(
            array(
                "nombre" => "Negocio 1",
                "img" => "images/logo-placeholder-2.jpg",
                "url" => "empresa/negocio-1",
                "desc"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam risus nibh, mattis eu luctus id, ullamcorper ac augue. Ut fermentum ac urna id elementum. Ut id eros fermentum, rutrum lacus a, molestie enim.Nombre de la Empresa"
            ),
            array(
                "nombre" => "Negocio 2",
                "img" => "images/logo-placeholder-1.jpg",
                "url" => "empresa/negocio-2",
                "desc"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam risus nibh, mattis eu luctus id, ullamcorper ac augue. Ut fermentum ac urna id elementum. Ut id eros fermentum, rutrum lacus a, molestie enim.Nombre de la Empresa"
            )
        );
    }

    public function mainAction($slug,$type=null)
    {
        if($type=='producto' || !isset($type)){
            $_productos = $this->getProductListByCategory($slug);
            return $this->render('MangoceleSiteBundle:Categorias:main.html.twig',array(
                'categoria' => $slug,
                'productos' => $_productos
            ));
        }else{

            $_empresas = $this->getCompanyListByCategory($slug);
            $_productos = $this->getProductListByCategory($slug);
            $comercios_list = $this->getEmpresas();

            return $this->render('MangoceleSiteBundle:Categorias:empresas_listado.html.twig',array(
                'categoria' => $slug,
                'empresa' => $_empresas,
                'comercios' => $comercios_list
            ));
        }
    }

}
