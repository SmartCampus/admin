<?php

namespace Smart\CampusBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CapteurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',       'text')
            ->add('Kind',       'choice', array(
                'choices' => array(
                    'temperature' => 'Température',
                    'light' => 'Light',
                    'presence' => 'Présence',
                ),
            ))
            ->add('Frequency',  'integer');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Smart\CampusBundle\Entity\Capteur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'smart_campusbundle_capteur';
    }
}
