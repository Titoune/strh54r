<?php
use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/api/', ['prefix' => 'apibundle', 'allowWithoutToken' => true], function (RouteBuilder $routes) {

});

Router::scope('/api/', ['prefix' => 'apibundle', 'allowWithoutToken' => false], function (RouteBuilder $routes) {
    $routes->fallbacks(DashedRoute::class);
});





/**
 * Load all plugin routes. See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
