<?php

namespace Mangocele\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('password')
            ->add('nombre')
            ->add('apellido1',null,array('label'=>'Primer Apellido'))
            ->add('apellido2',null,array('label'=>'Segundo Apellido'))
            ->add('empresa')
            ->add('telefono')
            ->add('pais','choice', array(
                'choices'   => array(
                    'Costa Rica' => 'Costa Rica',
                    'Nicaragua' => 'Nicaragua',
                    'Honduras' => 'Honduras',
                    'El Salvador' => 'El Salvador',
                    'Panama' => 'Panama',
                    'Otro' => 'Otro'
                )
            ))
            //->add('salt')
            ->add('roles','choice',array(
                'choices' => array(
                    'admin' => 'admin',
                    'usuario' => 'usuario'
                )
            ))
           // ->add('save', 'submit',array('label'=>'Crear Usuario'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mangocele\UserBundle\Entity\Clientes'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mangocele_userbundle_clientes';
    }
}
