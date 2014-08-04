<?php

namespace Smart\CampusBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PhysiqueType extends AbstractType
{
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',       'text')
            ->add('kind',       'choice', array(
                'choices' => array(
                    'temperature' => 'Température',
                    'light' => 'Light',
                ),
            ))
            ->add('frequency',  'integer')
            ->add('board',       'entity', array(
                'class' => 'SmartCampusBundle:Board',
                'query_builder' => function(EntityRepository $er)
                {
                    return $er->createQueryBuilder('b')
                        ->orderBy('b.name', 'ASC');
                },
                'property' => 'name'))
            ->add('pin',    'integer')
            ->add('endpoint',   new EndpointType());
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Smart\CampusBundle\Entity\Physique'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'smart_campusbundle_physique';
    }
}
