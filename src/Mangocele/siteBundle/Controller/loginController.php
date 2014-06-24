<?php

namespace Mangocele\siteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class loginController extends Controller
{
    /**
     * @Route("login")
     * @Template()
     */
    public function mainAction( Request $request)
    {
        $data = 'test';

        $form = $this->createFormBuilder()
            ->add('email', 'text')
            ->add('password', 'password')
            ->add('ingresar', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();
            if($data['email'] == 'admin@mangocele.cr' && $data['password']=='test'){
                return $this->redirect($this->generateUrl('mangocele_site_user_login'));
            }else{
                return $this->render('MangoceleSiteBundle:login:main.html.twig',array(
                    'data' => $data,
                    'form' => $form->createView(),
                    'errors' => 'Usuario o password incorrecto'
                ));
            }
            //$data['email'] | $data['password']

            //return $data;
        }

        return $this->render('MangoceleSiteBundle:login:main.html.twig',array(
            'data' => $data,
            'form' => $form->createView()
        ));
    }

}
