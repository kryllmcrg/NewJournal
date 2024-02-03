<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'User::index');
$routes->get('/', 'UserController::home');
$routes->get('/login', 'UserController::login');
$routes->post('authenticate', 'UserController::authenticate');
$routes->get('/register', 'UserController::register');
$routes->post('register', 'UserController::save');
$routes->get('/dashboard', 'UserController::dashboard');

