<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->setAutoRoute(true);
$routes->add('posts', function() { return "<h2>These are the posts</h2>"; });
 $routes->add('answers', 'answers');

$routes->group('admin', function ($routes) {
    $routes->add('user', 'Admin\Users::index');
    $routes->add('users', 'Admin\Users::getAllUsers');




        /// Prompt routes
        $routes->get('my-form', 'Home::myForm');
        $routes->get('submit', 'Home::submit');


});

