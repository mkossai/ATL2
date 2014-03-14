<?php

namespace FrontEnd\BackEndBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AchtralikType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content')
            ->add('category', 'entity',
                                    array ('label' => 'Catégorie',
                                           'class' => 'FrontEnd\\BackEndBundle\\Entity\\CategoryAtl',
                                           'property' => 'name',
                                           'required' => true,
                                           
                       ))
            ->add('disabled')
            ->add('sex')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FrontEnd\BackEndBundle\Entity\Achtralik'
        ));
    }

    public function getName()
    {
        return 'frontend_backendbundle_achtraliktype';
    }
}
