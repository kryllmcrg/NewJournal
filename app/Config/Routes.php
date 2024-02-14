<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'User::index');
$routes->get('/', 'UserController::home');
$routes->get('/about', 'UserController::about');
$routes->get('/contact', 'UserController::contact');
$routes->get('/news', 'UserController::news');
$routes->get('/announcements', 'UserController::announcements');

$routes->get('/login', 'LogRegController::login');
$routes->post('authenticate', 'LogRegController::login');
$routes->get('logout', 'LogRegController::logout');
$routes->get('/register', 'LogRegController::register');
$routes->post('/store', 'LogRegController::store');


$routes->get('/dashboard', 'AdminController::dashboard');

$routes->get('/manageprofile', 'ProfileController::manageprofile');

$routes->get('/addnews', 'NewsController::addnews');
$routes->post('addnewsSubmit', 'NewsController::addNewsSubmit');
$routes->get('/managenews', 'NewsController::managenews');

$routes->get('/managecomments', 'CommentsController::managecomments');

$routes->get('/chats', 'ChatController::chats');

$routes->get('/addcategory', 'CategoryController::addcategory');
$routes->post('/addcategory', 'CategoryController::addcategory');
$routes->get('/getcategory', 'CategoryController::getcategory');
$routes->get('/managecategory', 'CategoryController::managecategory');



$routes->get('/addingNews', 'StaffController::addingNews');


