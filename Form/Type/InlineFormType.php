<?php

/**
 * This file is part of BraincraftedBootstrapDemoBundle.
 * (c) 2012 Florian Eckerstorfer
 */

namespace Braincrafted\BootstrapDemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * InlineFormType
 *
 * @category   FormType
 * @package    BraincraftedBootstrapBundle
 * @subpackage Form
 * @author     Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright  2012 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       http://bootstrap.braincrafted.com Bootstrap for Symfony2
 */
class InlineFormType extends AbstractType
{
    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email', array(
            'required'      => false,
            'attr'  => array(
                'placeholder'   => 'Email',
                'class'         => 'input-small'
            )
        ));
        $builder->add('password', 'password', array(
            'required'  => false,
            'attr'      => array(
                'placeholder'   => 'Password',
                'class'         => 'input-small'
            )
        ));
        $builder->add('rememberMe', 'checkbox', array(
            'label'     => 'Remember me'
        ));
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'inline_form';
    }
}
