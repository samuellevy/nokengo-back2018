<?php
use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::prefix('admin', function ($routes) {
    $routes->fallbacks('InflectedRoute');
    $routes->connect('/', ['controller' => 'pages', 'action' => 'home']);
});

Router::scope('/m', ['m'=>true], function ($routes) {
    $routes->fallbacks('InflectedRoute');
    $routes->connect('/', ['controller' => 'pages', 'action' => 'home']);
    $routes->connect('/galeria', ['controller' => 'Pages', 'action' => 'gallery']);
    $routes->connect('/galeria/:type', ['controller' => 'Pages', 'action' => 'galleryread'],['pass' => ['type']]);
    $routes->connect('/oclube', ['controller' => 'Pages', 'action' => 'club']);
    $routes->connect('/novidades', ['controller' => 'Pages', 'action' => 'news']);
    $routes->connect('/novidades/:type', ['controller' => 'Pages', 'action' => 'newsread'],['pass' => ['type']]);
    $routes->connect('/opiniao', ['controller' => 'Pages', 'action' => 'opinion']);
    $routes->connect('/opiniao/:type', ['controller' => 'Pages', 'action' => 'opinion'],['pass' => ['type']]);
    $routes->connect('/envie', ['controller' => 'Works', 'action' => 'add']);
    $routes->connect('/contato', ['controller' => 'Pages', 'action' => 'contact']);
});

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'home']);
    $routes->connect('/galeria', ['controller' => 'Pages', 'action' => 'gallery']);
    $routes->connect('/galeria/:type', ['controller' => 'Pages', 'action' => 'galleryread'],['pass' => ['type']]);
    $routes->connect('/oclube', ['controller' => 'Pages', 'action' => 'club']);
    $routes->connect('/novidades', ['controller' => 'Pages', 'action' => 'news']);
    $routes->connect('/novidades/:type', ['controller' => 'Pages', 'action' => 'newsread'],['pass' => ['type']]);
    $routes->connect('/opiniao', ['controller' => 'Pages', 'action' => 'opinion']);
    $routes->connect('/opiniao/:type', ['controller' => 'Pages', 'action' => 'opinion'],['pass' => ['type']]);
    $routes->connect('/envie', ['controller' => 'Works', 'action' => 'add']);
    $routes->connect('/contato', ['controller' => 'Pages', 'action' => 'contact']);
    $routes->fallbacks(DashedRoute::class);
});

Plugin::routes();
