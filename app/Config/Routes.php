<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'User::index');
$routes->get('/', 'UserController::home');
$routes->get('/about', 'UserController::about');
$routes->get('/news_read/(:num)', 'UserController::news_read/$1');
$routes->get('/contact', 'UserController::contact');
$routes->get('/announce', 'UserController::announce');
$routes->get('/news', 'UserController::news');
$routes->post('/like/(:any)', 'UserController::like/$1');
$routes->get('/categories', 'UserController::getCategoryData');
$routes->get('filterNews/(:any)', 'UserController::filterNews/$1');
$routes->get('news/(:num)', 'UserController::news/$1');

$routes->get('/login', 'LogRegController::login');
$routes->post('check', 'LogRegController::check');
$routes->get('logout', 'LogRegController::logout');
$routes->get('/register', 'LogRegController::register');
$routes->post('/save', 'LogRegController::save');
$routes->get('/filtercheck', 'LogRegController::filtercheck', ['filter' => 'rolecheck']);
$routes->get('/logout', 'LogRegController::logout');

$routes->get('/dashboard', 'AdminController::dashboard');

$routes->get('/addemployee', 'ProfileController::addemployee');
$routes->get('/manageprofile', 'ProfileController::manageprofile');
$routes->get('/manageusers', 'ProfileController::manageusers');
$routes->post('update', 'ProfileController::update');


$routes->get('/addnews', 'NewsController::addnews');
$routes->post('addNewsSubmit', 'NewsController::addNewsSubmit');
$routes->post('upload_image', 'NewsController::uploadImage');
$routes->get('/managenews', 'NewsController::managenews');
$routes->get('/deleteNews/(:any)', 'NewsController::deleteNews/$1');
$routes->post('/updateNews', 'NewsController::updateNews');
$routes->get('/editNews/(:num)', 'NewsController::editNews/$1');
$routes->post('changeNewStatus', 'NewsController::changeNewStatus');
$routes->post('changePubStatus', 'NewsController::changePubStatus');
$routes->get('/viewnews/(:any)', 'NewsController::viewnews/$1');
$routes->get('/archive', 'NewsController::archive');
$routes->get('/restoreNews/(:any)', 'NewsController::restoreNews/$1');
$routes->get('/newsDelete/(:any)', 'NewsController::newsDelete/$1');
$routes->post('contact/submitContactForm', 'NewsController::submitContactForm');
$routes->get('contact', 'NewsController:contact');
$routes->get('/newsAudit', 'NewsController::newsAudit');

$routes->get('/chats', 'ChatController::chats');


$routes->post('addComment', 'CommentsController::addComment');
$routes->post('commentStatus', 'CommentsController::commentStatus');
$routes->post('reply', 'CommentsController::reply'); // Adjust 'YourController' with the actual controller name
$routes->get('managecomments/(:num)', 'CommentsController::managecomments/$1');
$routes->get('managecomments', 'CommentsController::showManageCommentsPage');

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
$routes->post('/createNewsSubmit', 'NewsStaffController::createNewsSubmit');
$routes->get('/managenewstaff', 'NewsStaffController::managenewstaff');
$routes->get('/dashboard', 'NewsStaffController::dashboard');
$routes->get('/updateNews/(:num)', 'NewsStaffController::updateNews/$1');
$routes->get('/newsUpdate', 'NewsStaffController::newsUpdate/$1');


$routes->post('search_results', 'UserController::searchNews');

