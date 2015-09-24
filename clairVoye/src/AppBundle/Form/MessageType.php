<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MessageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array(
                'required'=>false,
                'label'=>'Titre',
            ))
            ->add('texte', 'textarea', array(
                'label'=>'Message',
            ))
            ->add('published', 'checkbox', array(
                'required'=>false,
                'label'=>'Publié',
            ))
            ->add('person', 'entity',array(
                'class'=>'AppBundle:Person',
                'porperty'=>'lastname',
            ))
            ->add('goldBooks','entity', array(
                'class'=> 'AppBundle:GoldBook',
                'porperty'=>'name',
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Message'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_message';
    }
}
