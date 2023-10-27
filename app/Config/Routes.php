<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->setAutoRoute(true);
$routes->add('prompt/(:any)/(:any)', 'Config::prompt/$1/$2');

$routes->add('posts', function() { return "<h2>These are the posts</h2>"; });

$routes->group('admin', function ($routes) {
    $routes->add('user', 'Admin\Users::index');
    $routes->add('users', 'Admin\Users::getAllUsers');
    $routes->add('prompt/(:any)/(:any)', 'Admin\Config::prompt/$1/$2');




        /// Prompt routes
        $routes->add('prompt', 'Admin\Prompt::index');
        $routes->add('prompt/new', 'Admin\Prompt::createNew');
        $routes->post('prompt/new', 'Admin\Prompt::savePrompt');


});

