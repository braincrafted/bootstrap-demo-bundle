<?php

/**
 * BootstrapController
 *
 * PHP Version 5.3.10
 *
 * @category  Controller
 * @package   BraincraftedBootstrapBundle
 * @author    Florian Eckerstorfer <florian@theroadtojoy.at>
 * @copyright 2012 Florian Eckerstorfer
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

namespace Braincrafted\BootstrapDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Braincrafted\BootstrapDemoBundle\Form\Type\DefaultStylesFormType;
use Braincrafted\BootstrapDemoBundle\Form\Type\ControlStatesFormType;
use Braincrafted\BootstrapDemoBundle\Form\Type\ExtendingControlsFormType;
use Braincrafted\BootstrapDemoBundle\Form\Type\HorizontalFormType;
use Braincrafted\BootstrapDemoBundle\Form\Type\InlineFormType;
use Braincrafted\BootstrapDemoBundle\Form\Type\SearchFormType;

/**
 * BootstrapController
 *
 * @category  Controller
 * @package   BraincraftedBootstrapBundle
 * @author    Florian Eckerstorfer <florian@theroadtojoy.at>
 * @copyright 2012 Florian Eckerstorfer
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class BootstrapController extends Controller
{
    public function indexAction()
    {
        return $this->render(
            'BraincraftedBootstrapDemoBundle:Bootstrap:index.html.twig'
        );
    }

    public function gettingStartedAction()
    {
        return $this->render(
            'BraincraftedBootstrapDemoBundle:Bootstrap:gettingStarted.html.twig'
        );
    }

    public function scaffoldingAction()
    {
        return $this->render(
            'BraincraftedBootstrapDemoBundle:Bootstrap:scaffolding.html.twig'
        );
    }

    public function baseCssAction()
    {
        $defaultStylesForm     = $this->createForm(new DefaultStylesFormType());
        $controlStatesForm     = $this->createForm(new ControlStatesFormType());
        $extendingControlsForm = $this->createForm(
            new ExtendingControlsFormType()
        );
        $horizontalForm        = $this->createForm(new HorizontalFormType());
        $inlineForm            = $this->createForm(new InlineFormType());
        $searchForm            = $this->createForm(new SearchFormType());

        return $this->render(
            'BraincraftedBootstrapDemoBundle:Bootstrap:baseCss.html.twig',
            array(
                'defaultStylesForm'     => $defaultStylesForm->createView(),
                'controlStatesForm'     => $controlStatesForm->createView(),
                'extendingControlsForm' => $extendingControlsForm->createView(),
                'horizontalForm'        => $horizontalForm->createView(),
                'inlineForm'            => $inlineForm->createView(),
                'searchForm'            => $searchForm->createView()
            )
        );
    }

    public function componentsAction()
    {
        return $this->render(
            'BraincraftedBootstrapDemoBundle:Bootstrap:components.html.twig'
        );
    }

    public function javascriptAction()
    {
        return $this->render(
            'BraincraftedBootstrapDemoBundle:Bootstrap:javascript.html.twig'
        );
    }

    public function customizeAction()
    {
        return $this->render(
            'BraincraftedBootstrapDemoBundle:Bootstrap:customize.html.twig'
        );
    }
}
