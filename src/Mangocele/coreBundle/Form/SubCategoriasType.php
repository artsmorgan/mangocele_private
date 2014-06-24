<?php

namespace Mangocele\coreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Mangocele\coreBundle\Entity\Categorias;
use Mangocele\coreBundle\Form\CategoriasType;
use Doctrine\ORM\EntityRepository;

class SubCategoriasType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idCategoria')
            ->add('titulo')
            ->add('createdBy')
            //->add('createdWhen')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mangocele\coreBundle\Entity\SubCategorias'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mangocele_corebundle_subcategorias';
    }
}
