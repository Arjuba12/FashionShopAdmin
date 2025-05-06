<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Welcome::index');
$routes->get('welcome', 'Welcome::index');
$routes->get('home', 'Home::index');
$routes->get('front_end_home', 'FrontEndHome::index');
$routes->get('about', 'About::index');
$routes->get('whitepaper', 'Whitepaper::index');
$routes->get('login_page', 'LoginPage::index');
$routes->get('admin', 'Admin::index');


$routes->post('auth/login', 'Auth::login');
$routes->get('auth', 'Auth::index');
$routes->get('auth/index', 'Auth::index');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('auth/login', 'Auth::login');

$routes->get('product', 'Product::index');

$routes->get('producthome', 'ProductHome::index');
$routes->get('producthome/tambah', 'ProductHome::tambah');
$routes->post('producthome/save', 'ProductHome::save');
$routes->get('producthome/edit/(:num)', 'ProductHome::edit/$1');
$routes->post('producthome/update/(:num)', 'ProductHome::update/$1');
$routes->get('producthome/delete/(:num)', 'ProductHome::delete/$1');
$routes->get('producthome/printpdf', 'ProductHome::printpdf');

$routes->get('product_home', 'ProductHome::index');



$routes->group('product', function ($routes) {
    $routes->get('/', 'Product::index');
    $routes->get('tambah', 'Product::tambah');
    $routes->post('save', 'Product::save');
    $routes->get('edit/(:num)', 'Product::edit/$1');
    $routes->post('update/(:num)', 'Product::update/$1');
    $routes->get('delete/(:num)', 'Product::delete/$1');
    $routes->get('printpdf', 'Product::printpdf');
});

$routes->group('penjualan', function ($routes) {
    $routes->get('/', 'Penjualan::index');
    $routes->get('tambah', 'Penjualan::tambah');
    $routes->post('save', 'Penjualan::save');
    $routes->get('edit/(:num)', 'Penjualan::edit/$1');
    $routes->post('update/(:num)', 'Penjualan::update/$1');
    $routes->get('delete/(:num)', 'Penjualan::delete/$1');
    $routes->get('printpdf', 'Penjualan::printpdf');
});

$routes->group('konsumen', function ($routes) {
    $routes->get('/', 'Konsumen::index');
    $routes->get('tambah', 'Konsumen::tambah');
    $routes->post('save', 'Konsumen::save');
    $routes->get('edit/(:num)', 'Konsumen::edit/$1');
    $routes->post('update/(:num)', 'Konsumen::update/$1');
    $routes->get('delete/(:num)', 'Konsumen::delete/$1');
    $routes->get('printpdf', 'Konsumen::printpdf');
});

$routes->group('supplier', function ($routes) {
    $routes->get('/', 'Supplier::index');
    $routes->get('tambah', 'Supplier::tambah');
    $routes->post('save', 'Supplier::save');
    $routes->get('edit/(:num)', 'Supplier::edit/$1');
    $routes->post('update/(:num)', 'Supplier::update/$1');
    $routes->get('delete/(:num)', 'Supplier::delete/$1');
    $routes->get('printpdf', 'Supplier::printpdf');
});

$routes->get('/product_home', 'ProductHome::index');
$routes->get('/product_home/tambah', 'ProductHome::tambah');
$routes->post('/product_home/save', 'ProductHome::save');
$routes->get('/product_home/edit/(:num)', 'ProductHome::edit/$1');
$routes->post('/product_home/update/(:num)', 'ProductHome::update/$1');
$routes->get('/product_home/delete/(:num)', 'ProductHome::delete/$1');






