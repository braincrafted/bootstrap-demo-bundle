<?php

/**
 * This file is part of BraincraftedBootstrapDemoBundle.
 * (c) 2012 Florian Eckerstorfer
 */

namespace Braincrafted\BootstrapDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Braincrafted\BootstrapDemoBundle\Entity\City;
use Braincrafted\BootstrapDemoBundle\Form\Type\DefaultStylesFormType;
use Braincrafted\BootstrapDemoBundle\Form\Type\ControlStatesFormType;
use Braincrafted\BootstrapDemoBundle\Form\Type\SupportedFormControlsType;
use Braincrafted\BootstrapDemoBundle\Form\Type\ExtendingControlsFormType;
use Braincrafted\BootstrapDemoBundle\Form\Type\HorizontalFormType;
use Braincrafted\BootstrapDemoBundle\Form\Type\InlineFormType;
use Braincrafted\BootstrapDemoBundle\Form\Type\SearchFormType;
use Braincrafted\BootstrapDemoBundle\Form\Type\CityType;

/**
 * BootstrapController
 *
 * @category   Controller
 * @package    BraincraftedBootstrapBundle
 * @subpackage Controller
 * @author     Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright  2012 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       http://bootstrap.braincrafted.com Bootstrap for Symfony2
 */
class BootstrapController extends Controller
{
    /**
     * The index action.
     *
     * @return \Symfony\Component\HttpFoundation\Response The response
     */
    public function indexAction()
    {
        return $this->render('BraincraftedBootstrapDemoBundle:Bootstrap:index.html.twig');
    }

    /**
     * The getting started action.
     *
     * @return \Symfony\Component\HttpFoundation\Response The response
     */
    public function gettingStartedAction()
    {
        return $this->render('BraincraftedBootstrapDemoBundle:Bootstrap:gettingStarted.html.twig');
    }

    /**
     * The scaffolding action.
     *
     * @return \Symfony\Component\HttpFoundation\Response The response
     */
    public function scaffoldingAction()
    {
        return $this->render('BraincraftedBootstrapDemoBundle:Bootstrap:scaffolding.html.twig');
    }

    /**
     * The base CSS action.
     *
     * @return \Symfony\Component\HttpFoundation\Response The response
     */
    public function baseCssAction()
    {
        $defaultStylesForm     = $this->createForm(new DefaultStylesFormType());
        $controlStatesForm     = $this->createForm(new ControlStatesFormType());
        $supportedFormControls = $this->createForm(new SupportedFormControlsType());
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
                'supportedFormControls' => $supportedFormControls->createView(),
                'extendingControlsForm' => $extendingControlsForm->createView(),
                'horizontalForm'        => $horizontalForm->createView(),
                'inlineForm'            => $inlineForm->createView(),
                'searchForm'            => $searchForm->createView()
            )
        );
    }

    /**
     * The components action.
     *
     * @return \Symfony\Component\HttpFoundation\Response The response
     */
    public function componentsAction()
    {
        return $this->render(
            'BraincraftedBootstrapDemoBundle:Bootstrap:components.html.twig'
        );
    }

    /**
     * The javascript action.
     *
     * @return \Symfony\Component\HttpFoundation\Response The response
     */
    public function javascriptAction()
    {
        return $this->render(
            'BraincraftedBootstrapDemoBundle:Bootstrap:javascript.html.twig'
        );
    }

    /**
     * The forms action.
     *
     * @return \Symfony\Component\HttpFoundation\Response The response
     */
    public function formsAction()
    {
        $request = $this->getRequest();

        $city = new City();
        $cityForm = $this->createForm(new CityType(), $city);

        if ($request->getMethod() == 'POST') {
            $cityForm->bind($request);

            if ($cityForm->isValid()) {
            }
        }

        return $this->render('BraincraftedBootstrapDemoBundle:Bootstrap:forms.html.twig', array(
            'cityForm' => $cityForm->createView()
        ));
    }
}
