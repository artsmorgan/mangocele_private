<?php

namespace Mangocele\coreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Mangocele\coreBundle\Services\UserService as userService;
use Mangocele\UserBundle\Entity\User;
use Mangocele\UserBundle\Form\UserType;

use Doctrine\ORM\EntityRepository;



class EmpresasType extends AbstractType
{
    /*
    protected $userRepository;

    public function __construct(RepositoryInterface $userRepository)
    {
        $this->userRepsitory = $userRepository;
    }
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*$userEntities = $this->userRepository->getAll();
        print_r($userEntities);
        die();*/

        $builder
            ->add('idCliente','entity', array(
                // Entity class
                'class'         => 'MangoceleUserBundle:User',
                // Display field
                'property'      => 'username',
                // Closure with repository query
                'query_builder' => function(EntityRepository $repo) {
                    return $repo->createQueryBuilder('u')
                        ->orderBy('u.email', 'ASC');
                },
                'multiple'      => false,
                'expanded'      => false,
                'label'         => 'Dueño de la empresa:',
            ))
            ->add('nombre')
            ->add('descripcion','textarea')
            ->add('telefonoOficina')
            ->add('telefonoEmpresa')
            ->add('fax')
            ->add('email')
            ->add('direccion','textarea')
            ->add('cordX','text',array(
                'label' => 'Mapa X'
            ))
            ->add('cordY','text',array(
                'label' => 'Mapa Y'
            ))
            ->add('facebook')
            ->add('twitter')
            //->add('linkedin')
            ->add('youtube')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mangocele\coreBundle\Entity\Empresas'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mangocele_corebundle_empresas';
    }
}
