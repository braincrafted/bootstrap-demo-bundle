<?php

namespace Braincrafted\BootstrapDemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ExtendingControlsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('prependedInput', 'text', array(
            'attr' => array(
                'class'             => 'span2',
                'placeholder'       => 'Username',
                'prepend_input'     => '@'
            )
        ));
        $builder->add('appendedInput', 'text', array(
            'attr' => array(
                'class'         => 'span2',
                'append_input'  => '.00'
            )
        ));
        $builder->add('appendedPrependedInput', 'text', array(
            'attr'      => array(
                'class'         => 'span2',
                'prepend_input' => '$',
                'append_input'  => '.00'
            )
        ));
        $builder->add('appendedInputButton', 'text', array(
            'attr' => array('class' => 'span2')
        ));
        $builder->add('twoAppendedInputButtons', 'text', array(
            'attr' => array('class' => 'span2')
        ));
        $builder->add('searchButtonAppend', 'search', array(
            'attr' => array('class' => 'span2')
        ));
        $builder->add('searchButtonPrepend', 'search', array(
            'attr' => array('class' => 'span2')
        ));

        $builder->add('inputMini', 'text', array(
            'attr' => array(
                'class'         => 'input-mini',
                'placeholder'   => '.input-mini'
            )
        ));
        $builder->add('inputSmall', 'text', array(
            'attr' => array(
                'class'         => 'input-small',
                'placeholder'   => '.input-small'
            )
        ));
        $builder->add('inputMedium', 'text', array(
            'attr' => array(
                'class'         => 'input-medium',
                'placeholder'   => '.input-medium'
            )
        ));
        $builder->add('inputLarge', 'text', array(
            'attr' => array(
                'class'         => 'input-large',
                'placeholder'   => '.input-large'
            )
        ));
        $builder->add('inputXLarge', 'text', array(
            'attr' => array(
                'class'         => 'input-xlarge',
                'placeholder'   => '.input-xlarge'
            )
        ));
        $builder->add('inputXXLarge', 'text', array(
            'attr' => array(
                'class'         => 'input-xxlarge',
                'placeholder'   => '.input-xxlarge'
            )
        ));

        $builder->add('span1Input', 'text', array(
            'attr' => array(
                'class'         => 'span1',
                'placeholder'   => '.span1'
            )
        ));
        $builder->add('span1Input2', 'text', array(
            'attr' => array(
                'class'         => 'span1',
                'placeholder'   => '.span1'
            )
        ));
        $builder->add('span1Input3', 'text', array(
            'attr' => array(
                'class'         => 'span1',
                'placeholder'   => '.span1'
            )
        ));
        $builder->add('span2Input', 'text', array(
            'attr' => array(
                'class'         => 'span2',
                'placeholder'   => '.span2'
            )
        ));
        $builder->add('span2Input2', 'text', array(
            'attr' => array(
                'class'         => 'span2',
                'placeholder'   => '.span2'
            )
        ));
        $builder->add('span2Input3', 'text', array(
            'attr' => array(
                'class'         => 'span2',
                'placeholder'   => '.span2'
            )
        ));
        $builder->add('span3Input', 'text', array(
            'attr' => array(
                'class'         => 'span3',
                'placeholder'   => '.span3'
            )
        ));
        $builder->add('span3Input2', 'text', array(
            'attr' => array(
                'class'         => 'span3',
                'placeholder'   => '.span3'
            )
        ));
        $builder->add('span3Input3', 'text', array(
            'attr' => array(
                'class'         => 'span3',
                'placeholder'   => '.span3'
            )
        ));
        $builder->add('span4Input', 'text', array(
            'attr' => array(
                'class'         => 'span4',
                'placeholder'   => '.span4'
            )
        ));
        $builder->add('span4Input2', 'text', array(
            'attr' => array(
                'class'         => 'span4',
                'placeholder'   => '.span4'
            )
        ));
        $builder->add('span5Input', 'text', array(
            'attr' => array(
                'class'         => 'span5',
                'placeholder'   => '.span5'
            )
        ));
        $builder->add('span1Select', 'choice', array(
            'choices'   => array(1, 2, 3, 4, 5),
            'attr'      => array('class' => 'span1')
        ));
        $builder->add('span2Select', 'choice', array(
            'choices'   => array(1, 2, 3, 4, 5),
            'attr'      => array('class' => 'span2')
        ));
        $builder->add('span3Select', 'choice', array(
            'choices'   => array(1, 2, 3, 4, 5),
            'attr'      => array('class' => 'span3')
        ));

        $builder->add('helpInput', 'text', array(
            'attr'  => array('help'  => 'Inline help text')
        ));
        $builder->add('helpBlockInput', 'text', array(
            'attr'  => array(
                'help_block' => 'A longer block of help text that breaks onto a new line and may extend beyond one line.'
            )
        ));

        $builder->add('disabledInput', 'text', array(
            'disabled'  => true,
            'attr'      => array('placeholder' => 'Disabled input here...')
        ));
    }

    public function getName()
    {
        return 'extendedControlsForm';
    }
}