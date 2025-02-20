<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//halaman user
// $routes->get('/', 'MhsController::create');
$routes->get('/', 'ProfileController::homepage');
// $routes->get('/', 'MhsController::info');
// $routes->get('/daftar','MhsController::info');
$routes->get('/daftar', 'MhsController::create');
$routes->post('/daftar/save', 'MhsController::save');
$routes->get('/daftar/success', 'MhsController::success');

//masuk ke halaman login
$routes->get('/login', 'LoginController::login', ['filter' => 'KhususTamu']);
//request inputan dari form akan diproses menuju controller
$routes->post('/login/authenticate', 'LoginController::authenticate', ['filter' => 'KhususTamu']);
//memproses untuk logout
$routes->get('/logout', 'LoginController::logout');

//rute untuk admin
$routes->get('/tabel', 'MhsController::index', ['filter' => 'KhususAdmin']);
$routes->get('/detail/(:segment)', 'MhsController::detail/$1', ['filter' => 'KhususAdmin']);
// $routes->get('/detail/edit/(:segment)','MhsController::edit/$1',['filter' => 'KhususAdmin']);
// $routes->post('/detail/update/(:num)','MhsController::update/$1',['filter' => 'KhususAdmin']);
// $routes->post('/detail/delete/(:num)','MhsController::delete/$1',['filter' => 'KhususAdmin']);
$routes->get('/tabel/(:any)', 'MhsController::detail/$1', ['filter' => 'KhususAdmin']);
$routes->get('/download/pdf/(:segment)', 'MhsController::generatePdf/$1', ['filter' => 'KhususAdmin']);
// $routes->get('/downloadAll/(:any)', 'MhsController::downloadMultipleFile/$1', ['filter' => 'KhususAdmin']);
$routes->get('/download/(:segment)/(:any)', 'MhsController::download/$1/$2', ['filter' => 'KhususAdmin']);
$routes->get('/download/(:segment)/', 'MhsController::error/$1', ['filter' => 'KhususAdmin']);
$routes->get('/downloadAll/(:num)', 'MhsController::downloadAll/$1', ['filter' => 'KhususAdmin']);

$routes->post('getdata', 'MhsController::get_data', ['filter' => 'KhususAdmin']);


$routes->get('/info', 'MhsController::info');

$routes->get('/homepage', 'ProfileController::homepage');
