<?php
namespace Braincrafted\BootstrapDemoBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function navList(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('List Header');
        $menu->addChild('Home', array('route' => 'BraincraftedBootstrapDemoBundle_components'));
        $menu->addChild('Library', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
        $menu->addChild('Applications', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
        $menu->addChild('Another List Header');
        $menu->addChild('Profile', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
        $menu->addChild('Settings', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
        $menu->addChild('-DIVIDER-');
        $menu->addChild('Help', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));

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
        $menu->addChild('-DIVIDER-');
        $menu->addChild('.icon-flag Help', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));

        return $menu;
    }

    public function basicTabs(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'BraincraftedBootstrapDemoBundle_components'));
        $menu->addChild('Profile', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
        $menu->addChild('Messages', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));

        return $menu;
    }

    public function basicPills(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'BraincraftedBootstrapDemoBundle_components'));
        $menu->addChild('Profile', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
        $menu->addChild('Messages', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));

        return $menu;
    }

    public function stackedTabs(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'BraincraftedBootstrapDemoBundle_components'));
        $menu->addChild('Profile', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));
        $menu->addChild('Messages', array('route' => 'BraincraftedBootstrapDemoBundle_overview'));

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
}