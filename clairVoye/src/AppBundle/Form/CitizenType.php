<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CitizenType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('citizen', 'textarea', array(
                'label'=>'Citation',
            ))
            ->add('author','text', array(
                'label'=>'Auteur',
            ))
            ->add('published', 'checkbox', array(
                'required'=>false,
                'label'=>'Publiée',
            ))
            ->add('position', 'integer', array(
                'label'=>'Position',
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Citizen'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_citizen';
    }
}
