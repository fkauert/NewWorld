<?php

namespace NewWorld\providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class NewWorldRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
      $router->get('hello','NewWorld\controllers\ContentController@sayHello');
    }
}
