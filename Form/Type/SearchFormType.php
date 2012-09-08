<?php

namespace Braincrafted\BootstrapDemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SearchFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('searchQuery', 'search', array(
            'required'  => false,
            'attr'      => array('class'=> 'input-medium')
        ));
    }

    public function getName()
    {
        return 'search_form';
    }
}
