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

// Register Routes (QadrLabs)
$routes->group('register', static function ($routes) {
    $routes->get('/', 'RegisterController::index');
    $routes->post('/', 'RegisterController::store');
});

// Login Routes (QadrLabs)
$routes->group('login', static function ($routes) {
    $routes->get('/', 'LoginController::index');
    $routes->post('/', 'LoginController::login');
});

// Dashboard Route (QadrLabs)
$routes->get('/dashboard', 'Dashboard::index');

// Logout Route (QadrLabs)
$routes->group('logout', static function ($routes) {
    $routes->get('/', 'LogoutController::index');
});

// Admin Routes Group dilindungi oleh AuthFilter (Hanya user yang sudah login yang bisa CRUD)
$routes->group('admin', ['filter' => 'auth'], static function ($routes) {
    $routes->get('news', 'NewsAdmin::index');
    $routes->get('news/(:segment)/preview', 'NewsAdmin::preview/$1');
    $routes->add('news/new', 'NewsAdmin::create');
    $routes->add('news/(:segment)/edit', 'NewsAdmin::edit/$1');
    $routes->get('news/(:segment)/delete', 'NewsAdmin::delete/$1');
});
