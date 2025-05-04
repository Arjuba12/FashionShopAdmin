<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Welcome::index');
$routes->get('welcome', 'Welcome::index');
$routes->get('home', 'Home::index');
$routes->get('about', 'About::index');
$routes->get('whitepaper', 'Whitepaper::index');
$routes->get('login_page', 'LoginPage::index');

$routes->post('auth/login', 'Auth::login');
$routes->get('auth', 'Auth::index');
$routes->get('auth/index', 'Auth::index');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('auth/login', 'Auth::login');