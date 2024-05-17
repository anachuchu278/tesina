<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'RegisterControlador::index');  
$routes->post('register', 'RegisterControlador::register');
$routes->get('index', 'LoginControlador::index');
//$routes->get()
