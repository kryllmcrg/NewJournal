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

$routes->get('/login', 'LogRegController::login');
$routes->post('loginAuth', 'LogRegController::loginAuth');
$routes->get('logout', 'LogRegController::logout');
$routes->get('/register', 'LogRegController::register');
$routes->post('/store', 'LogRegController::store');


$routes->get('/dashboard', 'AdminController::dashboard');

$routes->get('/addemployee', 'ProfileController::addemployee');
$routes->get('/manageprofile', 'ProfileController::manageprofile');

$routes->get('/addnews', 'NewsController::addnews');
$routes->post('addNewsSubmit', 'NewsController::addNewsSubmit');
$routes->get('/managenews', 'NewsController::managenews');
$routes->get('/deleteNews/(:any)', 'NewsController::deleteNews/$1');
$routes->post('/editNews', 'NewsController::updateNews');
$routes->post('changeStatus', 'NewsController::changeStatus');

$routes->get('/viewnews/(:any)', 'NewsController::viewnews/$1');
$routes->get('/editNews', 'NewsController::editNews');

$routes->get('/archive', 'NewsController::archive');


$routes->get('/managecomments', 'CommentsController::managecomments');

$routes->get('/chats', 'ChatController::chats');

$routes->get('/addcategory', 'CategoryController::addcategory');
$routes->post('/addcategory', 'CategoryController::addcategory');
$routes->get('/getcategory', 'CategoryController::getcategory');
$routes->get('/managecategory', 'CategoryController::managecategory');
$routes->post('/saveCategoryChanges', 'CategoryController::saveCategoryChanges');


$routes->get('/announcements', 'AnnounceController::announcements');
$routes->get('/addannounce', 'AnnounceController::addannounce');
$routes->get('/manageannounce', 'AnnounceController::manageannounce');
$routes->post('addAnnounceSubmit', 'AnnounceController::addAnnounceSubmit');

