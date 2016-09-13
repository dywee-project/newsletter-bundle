<?php

namespace Dywee\NewsletterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewsletterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',  'email',    array('required' => true))
            ->add('active', 'checkbox', array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dywee\NewsletterBundle\Entity\Newsletter'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dywee_newsletterbundle_newsletter';
    }
}
