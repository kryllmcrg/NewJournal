<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'User::index');
$routes->get('/', 'UserController::home');
$routes->get('/login', 'UserController::login');
$routes->post('authenticate', 'UserController::home'); // Route for submitting the login form
$routes->get('logout', 'UserController::logout');
$routes->get('/register', 'UserController::register');
$routes->post('/store', 'UserController::register');
$routes->get('/about', 'UserController::about');
$routes->get('/contact', 'UserController::contact');
$routes->get('/news', 'UserController::news');
$routes->get('/announcements', 'UserController::announcements');


$routes->get('/dashboard', 'AdminController::dashboard');
$routes->get('/manageprofile', 'AdminController::manageprofile');
$routes->get('/addnews', 'AdminController::addnews');
$routes->get('/managenews', 'AdminController::managenews');
$routes->get('/managecomments', 'AdminController::managecomments');
$routes->get('/chats', 'AdminController::chats');
$routes->get('/addcategory', 'AdminController::addcategory');
$routes->get('/managecategory', 'AdminController::managecategory');



