<?php

namespace Braincrafted\BootstrapDemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class DefaultStylesFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('labelName', 'text', array(
            'label'         => 'Label name',
            'required'      => false,
            'attr'  => array(
                'placeholder'   => 'Type something...',
                'help_block'    => 'Example block-level help text here.'
            ),
        ));
        $builder->add('checkMeOut', 'checkbox', array(
            'label'     => 'Check me out'
        ));
    }

    public function getName()
    {
        return 'default_styles_form';
    }
}
