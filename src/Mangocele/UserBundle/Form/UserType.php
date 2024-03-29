<?php

namespace Mangocele\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           // ->add('username')
            //->add('usernameCanonical')
            ->add('email')
            //->add('emailCanonical')
            //->add('enabled')
            //->add('salt')
            ->add('password')
            //->add('lastLogin')
            //->add('locked')
            //->add('expired')
            //->add('expiresAt')
            //->add('confirmationToken')
            //->add('passwordRequestedAt')
            ->add('roles','choice',array(
                'choices'=> array(
                    'ROLE_ADMIN' => 'Administrador',
                    'ROLE_USER' => 'Cliente'
                ),
                    'multiple'=> true
                )
            )
            //->add('credentialsExpired')
            //->add('credentialsExpireAt')
            ->add('nombre')
            ->add('apellido1')
            ->add('apellido2')
            ->add('pais','choice',array(
                'choices'=> array(
                    'costa rica' => 'Costa Rica',
                    'centroamerica' => 'Centroamerica y el caribe',
                    'norte america' => 'Norte America',
                    'sur america' => 'Sur America',
                    'Europa' => 'Europa',
                )
            ))
            ->add('empresa')
            ->add('telefono')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mangocele\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mangocele_userbundle_user';
    }
}
