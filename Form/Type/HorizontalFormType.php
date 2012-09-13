<?php

/**
 * This file is part of BraincraftedBootstrapDemoBundle.
 * (c) 2012 Florian Eckerstorfer
 */

namespace Braincrafted\BootstrapDemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * HorizontalFormType
 *
 * @category   FormType
 * @package    BraincraftedBootstrapBundle
 * @subpackage Form
 * @author     Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright  2012 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       http://bootstrap.braincrafted.com Bootstrap for Symfony2
 */
class HorizontalFormType extends AbstractType
{
    /**
     * {@inheritDoc}
     */
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

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'horizontal_form';
    }
}
