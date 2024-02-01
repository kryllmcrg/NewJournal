<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'User::index');
$routes->get('/', 'User::home');
$routes->get('/login', 'User::login');
$routes->post('authenticate', 'User::authenticate');
$routes->get('/register', 'User::register');
$routes->post('register', 'User::save');
$routes->get('/dashboard', 'User::dashboard');

