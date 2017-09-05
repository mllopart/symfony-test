<?php

namespace AppBundle\Menu;

use Knp\Menu\MenuFactory;

class Builder {

  public function mainMenu(MenuFactory $factory, array $options) {

    $menu = $factory->createItem('root');
    $menu->setChildrenAttribute('class', 'navbar-nav mr-auto');

    $menu->addChild('Home', array('route' => 'homepage', 'attributes' => array('class' => 'nav-item')));
    $menu['Home']->setLinkAttribute('class', 'nav-link');

    $menu->addChild('Offer', array('route' => 'offer', 'attributes' => array('class' => 'nav-item')));
    $menu['Offer']->setLinkAttribute('class', 'nav-link');

    return $menu;


  }

}
