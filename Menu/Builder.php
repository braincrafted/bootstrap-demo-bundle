<?php

/**
 * This file is part of BraincraftedBootstrapDemoBundle.
 * (c) 2012 Florian Eckerstorfer
 */

namespace Braincrafted\BootstrapDemoBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

/**
 * Builder
 *
 * @category   MenuBuilder
 * @package    BraincraftedBootstrapBundle
 * @subpackage Menu
 * @author     Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright  2012 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       http://bootstrap.braincrafted.com Bootstrap for Symfony2
 */
class Builder extends ContainerAware
{
    /**
     * Builds the navbar menu.
     *
     * @param \Knp\Menu\FactoryInterface $factory The menu factory
     * @param array                      $options The options array
     *
     * @return \Knp\Menu\ItemInterface The root item
     */
    public function navbar(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'BraincraftedBootstrapDemoBundle_index'));
        $menu->addChild('Get started', array('route' => 'BraincraftedBootstrapDemoBundle_gettingStarted'));
        $menu->addChild('Scaffolding', array('route' => 'BraincraftedBootstrapDemoBundle_scaffolding'));
        $menu->addChild('Base CSS', array('route' => 'BraincraftedBootstrapDemoBundle_baseCss'));
        $menu->addChild('Components', array('route' => 'BraincraftedBootstrapDemoBundle_components'));
        $menu->addChild('Javascript', array('route' => 'BraincraftedBootstrapDemoBundle_javascript'));
        $menu->addChild('Forms', array('route' => 'BraincraftedBootstrapDemoBundle_forms'));

        return $menu;
    }

    /**
     * Builds the navList menu.
     *
     * @param \Knp\Menu\FactoryInterface $factory The menu factory
     * @param array                      $options The options array
     *
     * @return \Knp\Menu\ItemInterface The root item
     */
    public function navList(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $item = $menu->addChild('List Header');
        $item->addChild('Home', array('uri' => '#'));
        $item->addChild('Library', array('uri' => '#'));
        $item->addChild('Applications', array('uri' => '#'));
        $item = $menu->addChild('Another List Header');
        $item->addChild('Profile', array('uri' => '#'));
        $item->addChild('Settings', array('uri' => '#'));
        $menu->addChild('d1', array('attributes' => array('divider' => true)));
        $menu->addChild('Help', array('uri' => '#'));

        return $menu;
    }

    /**
     * Builds the basic tabs menu.
     *
     * @param \Knp\Menu\FactoryInterface $factory The menu factory
     * @param array                      $options The options array
     *
     * @return \Knp\Menu\ItemInterface The root item
     */
    public function basicTabs(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $item = $menu->addChild('Home', array('uri' => '#'));
        $item->setCurrent(true);
        $item = $menu->addChild('Profile', array('uri' => '#'));
        $item = $menu->addChild('Messages', array('uri' => '#'));

        return $menu;
    }

    /**
     * Builds the basic pills menu.
     *
     * @param \Knp\Menu\FactoryInterface $factory The menu factory
     * @param array                      $options The options array
     *
     * @return \Knp\Menu\ItemInterface The root item
     */
    public function basicPills(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $item = $menu->addChild('Home', array('uri' => '#'));
        $item->setCurrent(true);
        $item = $menu->addChild('Profile', array('uri' => '#'));
        $item = $menu->addChild('Messages', array('uri' => '#'));

        return $menu;
    }

    /**
     * Builds the disabled state menu.
     *
     * @param \Knp\Menu\FactoryInterface $factory The menu factory
     * @param array                      $options The options array
     *
     * @return \Knp\Menu\ItemInterface The root item
     */
    public function disabledState(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $item = $menu->addChild('Clickable link 1', array('uri' => '#'));
        $item = $menu->addChild('Clickable link 2', array('uri' => '#'));
        $item = $menu->addChild('Disabled link', array(
            'uri'           => '#',
            'attributes'    => array('class' => 'disabled')
        ));

        return $menu;
    }

    /**
     * Builds the pull right menu.
     *
     * @param \Knp\Menu\FactoryInterface $factory The menu factory
     * @param array                      $options The options array
     *
     * @return \Knp\Menu\ItemInterface The root item
     */
    public function pullRight(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $item = $menu->addChild('Link 1', array('uri' => '#'));
        $item = $menu->addChild('Link 2', array('uri' => '#'));
        $item = $menu->addChild('Link 3', array(
            'uri'           => '#',
            'attributes'    => array('class' => 'pull-right')
        ));

        return $menu;
    }

    /**
     * Builds the stacked tabs menu.
     *
     * @param \Knp\Menu\FactoryInterface $factory The menu factory
     * @param array                      $options The options array
     *
     * @return \Knp\Menu\ItemInterface The root item
     */
    public function stackedTabs(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $item = $menu->addChild('Home', array('uri' => '#'));
        $item->setCurrent(true);
        $item = $menu->addChild('Profile', array('uri' => '#'));
        $item = $menu->addChild('Messages', array('uri' => '#'));

        return $menu;
    }

    /**
     * Builds the stacked pills menu.
     *
     * @param \Knp\Menu\FactoryInterface $factory The menu factory
     * @param array                      $options The options array
     *
     * @return \Knp\Menu\ItemInterface The root item
     */
    public function stackedPills(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'BraincraftedBootstrapDemoBundle_components'));
        $menu->addChild('Profile', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
        $menu->addChild('Messages', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));

        return $menu;
    }

    /**
     * Builds the tabs with dropdown menu.
     *
     * @param \Knp\Menu\FactoryInterface $factory The menu factory
     * @param array                      $options The options array
     *
     * @return \Knp\Menu\ItemInterface The root item
     */
    public function tabsDropdown(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $item = $menu->addChild('Home', array('uri' => '#'));
        $item->setCurrent(true);
        $item = $menu->addChild('Help', array('uri' => '#'));
        $dropdown = $menu->addChild('Dropdown');
            $dropdown->addChild('Action', array('uri' => '#'));
            $dropdown->addChild('Another action', array('uri' => '#'));
            $dropdown->addChild('Something else here', array('uri' => '#'));
            $dropdown->addChild('d1', array('attributes' => array('divider' => true)));
            $dropdown->addChild('Separated link', array('uri' => '#'));

        return $menu;
    }

    /**
     * Builds the pills with dropdown menu.
     *
     * @param \Knp\Menu\FactoryInterface $factory The menu factory
     * @param array                      $options The options array
     *
     * @return \Knp\Menu\ItemInterface The root item
     */
    public function pillsDropdown(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'BraincraftedBootstrapDemoBundle_components'));
        $menu->addChild('Help', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
        $dropdown = $menu->addChild('Dropdown');
            $dropdown->addChild('Action', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
            $dropdown->addChild('Another action', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
            $dropdown->addChild('Something else here', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
            $dropdown->addChild('d1', array('attributes' => array('divider' => true)));
            $dropdown->addChild('Separated link', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));

        return $menu;
    }

    /**
     * Builds the basic navbar menu.
     *
     * @param \Knp\Menu\FactoryInterface $factory The menu factory
     * @param array                      $options The options array
     *
     * @return \Knp\Menu\ItemInterface The root item
     */
    public function basicNavbar(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $item = $menu->addChild('Home', array('uri' => '#'));
        $item->setCurrent(true);
        $item = $menu->addChild('Link 1', array('uri' => '#'));
        $item = $menu->addChild('Link 2', array('uri' => '#'));

        return $menu;
    }

    /**
     * Builds the navbar with divider menu.
     *
     * @param \Knp\Menu\FactoryInterface $factory The menu factory
     * @param array                      $options The options array
     *
     * @return \Knp\Menu\ItemInterface The root item
     */
    public function dividerNavbar(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $item = $menu->addChild('Home', array('uri' => '#'));
        $item->setCurrent(true);
        $item = $menu->addChild('d1', array('attributes' => array('divider' => true)));
        $item = $menu->addChild('Link 1', array('uri' => '#'));
        $item = $menu->addChild('d2', array('attributes' => array('divider' => true)));
        $item = $menu->addChild('Link 2', array('uri' => '#'));

        return $menu;
    }

    /**
     * Builds the responsive navbar menu.
     *
     * @param \Knp\Menu\FactoryInterface $factory The menu factory
     * @param array                      $options The options array
     *
     * @return \Knp\Menu\ItemInterface The root item
     */
    public function responsiveNavbar(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $item = $menu->addChild('Home', array('uri' => '#'));
        $item->setCurrent(true);
        $menu->addChild('Link 1', array('uri' => '#'));
        $menu->addChild('Link 2', array('uri' => '#'));
        $dropdown = $menu->addChild('Dropdown');
        $dropdown->addChild('Action', array('uri' => '#'));
        $dropdown->addChild('Another action', array('uri' => '#'));
        $dropdown->addChild('Something else here', array('uri' => '#'));
        $dropdown->addChild('d1', array('attributes' => array('divider' => true)));
        $subDropdown = $dropdown->addChild('Nav header');
        $subDropdown->addChild('Separated link', array('uri' => '#'));
        $subDropdown->addChild('One more separated link', array('uri' => '#'));


        return $menu;
    }

    /**
     * Builds the right responsive navbar menu.
     *
     * @param \Knp\Menu\FactoryInterface $factory The menu factory
     * @param array                      $options The options array
     *
     * @return \Knp\Menu\ItemInterface The root item
     */
    public function responsiveNavbarRight(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Link', array('uri' => '#'));
        $menu->addChild('d1', array('attributes' => array('divider' => true)));
        $dropdown = $menu->addChild('Dropdown');
        $dropdown->addChild('Action', array('uri' => '#'));
        $dropdown->addChild('Another action', array('uri' => '#'));
        $dropdown->addChild('Something else here', array('uri' => '#'));
        $dropdown->addChild('d1', array('attributes' => array('divider' => true)));
        $dropdown->addChild('Separated link', array('uri' => '#'));

        return $menu;
    }
}
