<?php

namespace Braincrafted\BootstrapDemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ControlStatesFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('focusedInput', 'text', array(
            'label'     => 'Focused input',
            'data'      => 'This is focused...',
            'required'  => false,
            'attr'      => array(
                'class'         => 'input-xlarge focused'
            )
        ));
        $builder->add('uneditableInput', 'text', array(
            'label'     => 'Uneditable input',
            'data'      => 'Some value here',
            'required'  => false,
            'attr'      => array(
                'class'         => 'input-xlarge',
                'uneditable'    => true
            )
        ));
        $builder->add('disabledInput', 'text', array(
            'label'     => 'Disabled input',
            'required'  => false,
            'disabled'  => true,
            'attr'      => array(
                'placeholder'   => 'Disabled input here...',
                'class'         => 'input-xlarge'
            )
        ));
        $builder->add('disabledCheckbox', 'checkbox', array(
            'label'     => 'This is a disabled checkbox',
            'required'  => false,
            'disabled'  => true,
            'attr'      => array(
                'widget_label'  => 'Disabled checkbox'
            )
        ));
        $builder->add('inputWithWarning', 'text', array(
            'label'     => 'Input with warning',
            'required'  => false,
            'attr'      => array(
                'help_inline'   => 'Something may have gone wrong',
                'control_group_class'   => 'warning'
            ),
        ));
        $builder->add('inputWithError', 'text', array(
            'label'     => 'Input with error',
            'required'  => false,
            'attr'      => array(
                'help_inline'           => 'Please correct the error',
                'control_group_class'   => 'error'
            )
        ));
        $builder->add('inputWithSuccess', 'text', array(
            'label'     => 'Input with success',
            'required'  => false,
            'attr'      => array(
                'help_inline'           => 'Woohoo!',
                'control_group_class'   => 'success'
            )
        ));
        $builder->add('selectWithSuccess', 'choice', array(
            'label'     => 'Select with success',
            'choices'   => array('1', '2', '3', '4', '5'),
            'data'      => 0,
            'required'  => false,
            'attr'      => array(
                'help_inline'           => 'Woohoo!',
                'control_group_class'   => 'success'
            )
        ));
    }

    public function getName()
    {
        return 'controlStatesForm';
    }
}