<?php

namespace Mangocele\coreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Mangocele\coreBundle\Entity\Empresas;
use Mangocele\coreBundle\Form\EmpresasType;

use Doctrine\ORM\EntityRepository;

class ProductosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idEmpresa','entity', array(
                // Entity class
                'class'         => 'MangocelecoreBundle:Empresas',
                // Display field
                'property'      => 'nombre',
                // Closure with repository query
                'query_builder' => function(EntityRepository $repo) {
                    return $repo->createQueryBuilder('u')
                        ->orderBy('u.nombre', 'ASC');
                },
                'multiple'      => false,
                'expanded'      => false,
                'label'         => 'Empresa:',
            ))
            ->add('titulo')
            ->add('descripcion','textarea')
            ->add('cantidad')
            ->add('dimensiones')
            ->add('peso')
            //->add('valoracion')
            //->add('createdBy')
            //->add('createdWhen')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mangocele\coreBundle\Entity\Productos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mangocele_corebundle_productos';
    }
}
