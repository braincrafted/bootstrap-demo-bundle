<?php

namespace Braincrafted\BootstrapDemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class HorizontalFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'text', array(
            'label' => 'Email',
            'attr'  => array('placeholder' => 'Email')
        ));
        $builder->add('password', 'password', array(
            'label' => 'Password',
            'attr'  => array('placeholder' => 'Password')
        ));
        $builder->add('checkbox', 'checkbox', array('label' => 'Remember me'));
    }

    public function getName()
    {
        return 'horizontal_form';
    }
}
