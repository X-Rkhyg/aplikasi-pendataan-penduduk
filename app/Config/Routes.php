<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/auth/login', 'Auth::login');
$routes->get('/auth/daftar', 'Auth::register');
$routes->post('/auth/valid_login', 'Auth::valid_login');
$routes->post('/auth/valid_register', 'Auth::valid_register');
$routes->get('/auth/logout', 'Auth::logout');
$routes->get('/user', 'User::dashboard');
$routes->get('/admin', 'Admin::dashboard');


$routes->get('/admin/ldata', 'Admin::kelahiran');

$routes->get('/admin/tambah/kelahiran', 'Admin::tambah_kelahiran');

$routes->get('/user/ldata', 'User::kelahiran');

$routes->post('/kelahiran/save', 'Kelahiran::save');

$routes->post('/kelahiran/admin/save', 'Kelahiran::saveadmin');

$routes->delete('/kelahiran/(:num)', 'Kelahiran::delete/$1');
$routes->get('/kelahiran/edit/(:num)', 'Kelahiran::edit/$1'); 
$routes->post('/kelahiran/update/(:num)', 'Kelahiran::update/$1');
