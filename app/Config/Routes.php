<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');
$routes->get('faqs', 'Home::faqs');

// Public News Routes (Petani Kode)
$routes->get('/news', 'News::index');
$routes->get('/news/(:any)', 'News::viewNews/$1');

// Admin Routes Group (Petani Kode CRUD)
$routes->group('admin', static function ($routes) {
    $routes->get('news', 'NewsAdmin::index');
    $routes->get('news/(:segment)/preview', 'NewsAdmin::preview/$1');
    $routes->add('news/new', 'NewsAdmin::create');
    $routes->add('news/(:segment)/edit', 'NewsAdmin::edit/$1');
    $routes->get('news/(:segment)/delete', 'NewsAdmin::delete/$1');
});
