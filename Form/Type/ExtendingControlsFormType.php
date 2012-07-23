<?php

namespace Braincrafted\BootstrapDemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ExtendingControlsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('grid1Size', 'text', array(
            'label'     => 'Form grid sizes',
            'required'  => false,
            'attr'      => array(
                'placeholder'   => '.span1',
                'class'         => 'span1'
            )
        ));
        $builder->add('grid2Size', 'text', array(
            'label'     => ' ',
            'required'  => false,
            'attr'      => array(
                'placeholder'   => '.span2',
                'class'         => 'span2'
            )
        ));
        $builder->add('grid3Size', 'text', array(
            'label'     => ' ',
            'required'  => false,
            'attr'      => array(
                'placeholder'   => '.span3',
                'class'         => 'span3'
            )
        ));
        $builder->add('select1Size', 'choice', array(
            'label'     => ' ',
            'choices'   => array(1, 2, 3, 4, 5),
            'data'      => 0,
            'required'  => false,
            'attr'      => array(
                'class'         => 'span1'
            )
        ));
        $builder->add('select2Size', 'choice', array(
            'label'     => ' ',
            'choices'   => array(1, 2, 3, 4, 5),
            'data'      => 0,
            'required'  => false,
            'attr'      => array(
                'class'         => 'span2'
            )
        ));
        $builder->add('select3Size', 'choice', array(
            'label'     => ' ',
            'choices'   => array(1, 2, 3, 4, 5),
            'data'      => 0,
            'required'  => false,
            'attr'      => array(
                'class'         => 'span3',
                'help_block'    => 'Use the same `.span*` classes from the grid system for input sizes.'
            )
        ));
        $builder->add('inputMini', 'text', array(
            'label'     => 'Alternative sizes',
            'required'  => false,
            'attr'      => array(
                'placeholder'   => '.input-mini',
                'class'         => 'input-mini'
            )
        ));
        $builder->add('inputSmall', 'text', array(
            'label'     => ' ',
            'required'  => false,
            'attr'      => array(
                'placeholder'   => '.input-small',
                'class'         => 'input-small'
            )
        ));
        $builder->add('inputMedium', 'text', array(
            'label'     => ' ',
            'required'  => false,
            'attr'      => array(
                'placeholder'   => '.input-medium',
                'class'         => 'input-medium',
                'help_block'    => 'You may also use static classes that don\'t map to the grid, adapt to the responsive CSS styles, or account for varying types of controls (e.g., `input` vs. `select`).'
            )
        ));
        $builder->add('prependedText', 'text', array(
            'label'     => 'Prepended text',
            'required'  => false,
            'attr'      => array(
                'class'     => 'span2'
            )
        ));
        $builder->add('appendedText', 'text', array(
            'label'     => 'Appended text',
            'required'  => false,
            'attr'      => array(
                'class'     => 'span2'
            )
        ));
        $builder->add('appendAndPrepend', 'text', array(
            'label'     => 'Append and prepend',
            'required'  => false,
            'attr'      => array(
                'class'     => 'span2'
            )
        ));
        $builder->add('appendWithButton', 'text', array(
            'label'     => 'Append with button',
            'required'  => false,
            'attr'      => array(
                'class'     => 'span2'
            )
        ));
        $builder->add('twoButtonAppend', 'text', array(
            'label'     => 'Two-button append',
            'required'  => false,
            'attr'      => array(
                'class'     => 'span2'
            )
        ));
        $builder->add('inlineCheckboxes', 'choice', array(
            'label'     => 'Inline checkboxes',
            'choices'   => array(1, 2, 3),
            'required'  => false,
            'expanded'  => true,
            'multiple'  => true,
            'attr'      => array(
                'class'     => 'hello-world',
                'inline'    => true
            )
        ));
        $builder->add('checkboxes', 'choice', array(
            'label'     => 'Checkboxes',
            'required'  => false,
            'expanded'  => true,
            'multiple'  => true,
            'choices'   => array(
                'Option one is this and that—be sure to include why it\'s great',
                'Option two can also be checked and included in form results',
                'Option three can—yes, you guessed it—also be checked and included in form results'
            ),
            'attr'      => array(
                'help_block'    => '**Note:** Labels surround all the options for much larger click areas and a more usable form.'
            )
        ));
        $builder->add('radioButtons', 'choice', array(
            'label'     => 'Radio buttons',
            'required'  => false,
            'expanded'  => true,
            'choices'   => array(
                'Option one is this and that—be sure to include why it\'s great',
                'Option two can be something else and selecting it will deselect option one'
            ),
            'data'      => 0
        ));
    }

    public function getName()
    {
        return 'extendedControlsForm';
    }
}