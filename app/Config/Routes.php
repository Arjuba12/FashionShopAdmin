<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'Auth::index');
$routes->post('auth/login', 'Auth::login');
$routes->get('auth', 'Auth::index');
$routes->get('auth/index', 'Auth::index');
$routes->get('auth/logout','Auth::logout');

