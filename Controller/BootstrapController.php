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

use Braincrafted\BootstrapDemoBundle\Form\Type\BasicFormType;
use Braincrafted\BootstrapDemoBundle\Form\Type\ControlStatesFormType;
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
    public function overviewAction()
    {
        return $this->render(
            'BraincraftedBootstrapDemoBundle:Bootstrap:overview.html.twig'
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
        $basicForm         = $this->createForm(new BasicFormType());
        $controlStatesForm = $this->createForm(new ControlStatesFormType());
        $horizontalForm    = $this->createForm(new HorizontalFormType());
        $inlineForm        = $this->createForm(new InlineFormType());
        $searchForm        = $this->createForm(new SearchFormType());

        return $this->render(
            'BraincraftedBootstrapDemoBundle:Bootstrap:baseCss.html.twig',
            array(
                'basicForm'         => $basicForm->createView(),
                'controlStatesForm' => $controlStatesForm->createView(),
                'horizontalForm'    => $horizontalForm->createView(),
                'inlineForm'        => $inlineForm->createView(),
                'searchForm'        => $searchForm->createView()
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

    public function lessAction()
    {
        return $this->render(
            'BraincraftedBootstrapDemoBundle:Bootstrap:less.html.twig'
        );
    }
}
