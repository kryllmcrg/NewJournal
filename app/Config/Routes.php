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
$routes->get('/news_read', 'UserController::news_read');

$routes->get('/login', 'LogRegController::login');
$routes->post('check', 'LogRegController::check');
$routes->get('logout', 'LogRegController::logout');
$routes->get('/register', 'LogRegController::register');
$routes->post('/save', 'LogRegController::save');

$routes->get('/dashboard', 'AdminController::dashboard');

$routes->get('/addemployee', 'ProfileController::addemployee');
$routes->get('/manageprofile', 'ProfileController::manageprofile');

$routes->get('/addnews', 'NewsController::addnews');

$routes->post('addNewsSubmit', 'NewsController::addNewsSubmit');
$routes->post('upload_image', 'NewsController::uploadImage');


$routes->get('/managenews', 'NewsController::managenews');
$routes->get('/deleteNews/(:any)', 'NewsController::deleteNews/$1');
$routes->post('/editNews', 'NewsController::updateNews');
$routes->post('changeNewStatus', 'NewsController::changeNewStatus');
$routes->post('changePubStatus', 'NewsController::changePubStatus');

$routes->get('/viewnews/(:any)', 'NewsController::viewnews/$1');
$routes->get('/editNews', 'NewsController::editNews');

$routes->get('/archive', 'NewsController::archive');
$routes->get('displaynews', 'NewsController::userdisplaynews');


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

//staff//
$routes->get('/createnews', 'NewsStaffController::createnews');
$routes->get('/managenewstaff', 'NewsStaffController::managenewstaff');
$routes->get('/dashboard', 'NewsStaffController::dashboard');
$routes->post('/createNewsSubmit', 'NewsController::createNewsSubmit');