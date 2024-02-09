<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'User::index');
$routes->get('/', 'UserController::home');
$routes->get('/login', 'UserController::login');
$routes->post('authenticate', 'UserController::login');
$routes->get('logout', 'UserController::logout');
$routes->get('/register', 'UserController::register');
$routes->post('/store', 'UserController::store');
$routes->get('/about', 'UserController::about');
$routes->get('/contact', 'UserController::contact');
$routes->get('/news', 'UserController::news');
$routes->get('/announcements', 'UserController::announcements');


$routes->get('/dashboard', 'AdminController::dashboard');
$routes->get('/manageprofile', 'AdminController::manageprofile');
$routes->get('/addnews', 'NewsController::addnews');
$routes->post('addnewsSubmit', 'NewsController::addNewsSubmit');
$routes->get('/managenews', 'AdminController::managenews');
$routes->get('/managecomments', 'AdminController::managecomments');
$routes->get('/chats', 'AdminController::chats');
$routes->get('/addcategory', 'CategoryController::addcategory');
$routes->post('/addcategory', 'CategoryController::addcategory');
$routes->get('/getcategory', 'CategoryController::getcategory');
$routes->get('/managecategory', 'AdminController::managecategory');



