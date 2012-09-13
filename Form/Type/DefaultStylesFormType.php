<?php

/**
 * This file is part of BraincraftedBootstrapDemoBundle.
 * (c) 2012 Florian Eckerstorfer
 */

namespace Braincrafted\BootstrapDemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * DefaultStylesFormType
 *
 * @category   FormType
 * @package    BraincraftedBootstrapBundle
 * @subpackage Form
 * @author     Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright  2012 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       http://bootstrap.braincrafted.com Bootstrap for Symfony2
 */
class DefaultStylesFormType extends AbstractType
{
    /**
     * {@inheritDoc}
     */
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

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'default_styles_form';
    }
}
