<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'User::index');
$routes->get('/', 'User::home');
$routes->get('/login', 'User::login');
$routes->get('/register', 'User::register');
