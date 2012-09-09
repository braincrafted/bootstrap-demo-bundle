<?php
namespace Braincrafted\BootstrapDemoBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function navBar(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Overview', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
        $menu->addChild('Scaffolding', array('route' => 'BraincraftedBootstrapDemoBundle_scaffolding'));
        $menu->addChild('Base CSS', array('route' => 'BraincraftedBootstrapDemoBundle_baseCss'));
        $menu->addChild('Components', array('route' => 'BraincraftedBootstrapDemoBundle_components'));
        $menu->addChild('Javascript plugins', array('route' => 'BraincraftedBootstrapDemoBundle_javascript'));
        $menu->addChild('Using LESS', array('route' => 'BraincraftedBootstrapDemoBundle_less'));
        $menu->addChild('-DIVIDER-');
        $menu->addChild('Customize', array('uri' => '#'));
        $menu->addChild('Examples', array('uri' => '#'));

        return $menu;
    }

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

    public function navListIcons(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('List Header');
        $menu->addChild('.icon-home Home', array('route' => 'BraincraftedBootstrapDemoBundle_components'));
        $menu->addChild('.icon-book Library', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
        $menu->addChild('.icon-pencil Applications', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
        $menu->addChild('Another List Header');
        $menu->addChild('.icon-user Profile', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
        $menu->addChild('.icon-cog Settings', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
        $menu->addChild('d1', array('attributes' => array('divider' => true)));
        $menu->addChild('.icon-flag Help', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));

        return $menu;
    }

    public function basicTabs(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $item = $menu->addChild('Home', array('uri' => '#'));
        $item->setCurrent(true);
        $item = $menu->addChild('Profile', array('uri' => '#'));
        $item = $menu->addChild('Messages', array('uri' => '#'));

        return $menu;
    }

    public function basicPills(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $item = $menu->addChild('Home', array('uri' => '#'));
        $item->setCurrent(true);
        $item = $menu->addChild('Profile', array('uri' => '#'));
        $item = $menu->addChild('Messages', array('uri' => '#'));

        return $menu;
    }

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

    public function stackedTabs(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $item = $menu->addChild('Home', array('uri' => '#'));
        $item->setCurrent(true);
        $item = $menu->addChild('Profile', array('uri' => '#'));
        $item = $menu->addChild('Messages', array('uri' => '#'));

        return $menu;
    }

    public function stackedPills(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'BraincraftedBootstrapDemoBundle_components'));
        $menu->addChild('Profile', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
        $menu->addChild('Messages', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));

        return $menu;
    }

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

    public function basicNavbar(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $item = $menu->addChild('Home', array('uri' => '#'));
        $item->setCurrent(true);
        $item = $menu->addChild('Link 1', array('uri' => '#'));
        $item = $menu->addChild('Link 2', array('uri' => '#'));

        return $menu;
    }

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