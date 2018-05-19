<?php
/**
 * Created by PhpStorm.
 * User: A
 * Date: 16.03.2018
 * Time: 06:07
 */

namespace AppBundle\Menu;

use Knp\Menu\MenuFactory;

class Builder
{
    public function mainMenu(MenuFactory $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
        $menu->addChild('Home',['route' => 'homepage']);
        $menu->addChild('Offer',['route' => 'offer']);
        return $menu;
    }
}