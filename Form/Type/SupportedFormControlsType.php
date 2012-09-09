<?php

namespace Braincrafted\BootstrapDemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SupportedFormControlsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('text1', 'text', array(
            'attr' => array('placeholder' => 'Text input')
        ));

        $builder->add('text2', 'textarea', array(
            'attr' => array('rows' => 3)
        ));

        $builder->add('checkbox1', 'choice', array(
            'multiple'  => true,
            'expanded'  => true,
            'choices'   => array(
                'Option one is this and that—be sure to include why it\'s great'
            )
        ));
        $builder->add('radio1', 'choice', array(
            'expanded'  => true,
            'choices'   => array(
                'Option one is this and that—be sure to include why it\'s great',
                'Option two can be something else and selecting it will deselect option one'
            )
        ));
        $builder->add('inlineCheckboxes', 'choice', array(
            'multiple'  => true,
            'expanded'  => true,
            'choices'   => array(1, 2, 3),
            'attr'      => array('inline' => true)
        ));


        $builder->add('select1', 'choice', array(
            'choices' => array(1, 2, 3, 4, 5)
        ));
        $builder->add('select2', 'choice', array(
            'choices'   => array(1, 2, 3, 4, 5),
            'multiple'  => true
        ));
    }

    public function getName()
    {
        return 'supported_form_controls';
    }
}