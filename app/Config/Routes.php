<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Rute untuk halaman utama, memanggil method index dari controller Home
$routes->get('/login', 'Auth::index'); // Rute untuk halaman login, memanggil method index dari controller Auth
$routes->post('/login/process', 'Auth::process'); // Rute untuk proses login (POST request), memanggil method process dari controller Auth
$routes->get('/logout', 'Auth::logout'); // Rute untuk proses logout, memanggil method logout dari controller Auth
$routes->get('/register', 'Auth::register'); // Rute untuk halaman registrasi, memanggil method register dari controller Auth
$routes->post('/register/save', 'Auth::saveRegister'); // Rute untuk proses menyimpan registrasi (POST request), memanggil method saveRegister dari controller Auth
$routes->get('/dashboard', 'Dashboard::index'); // Rute untuk halaman dashboard, memanggil method index dari controller Dashboard
$routes->get('/control_panel', 'Home::control_panel'); // Rute untuk halaman dashboard, memanggil method index dari controller Dashboard
$routes->get('/users', 'Home::users'); // Rute untuk halaman dashboard, memanggil method index dari controller Dashboard
$routes->post('/users/save', 'Home::save'); // Rute untuk halaman dashboard, memanggil method index dari controller Dashboard
$routes->post('/users/update', 'Home::update'); // Rute untuk halaman dashboard, memanggil method index dari controller Dashboard
$routes->add('/users/update/(:segment)', 'Home::update/$1');
$routes->get('/users/delete/(:segment)', 'Home::delete/$1');
$routes->get('/riwayat', 'Home::riwayat'); // Rute untuk halaman dashboard, memanggil method index dari controller Dashboard
$routes->get('/profile', 'Home::profile'); // Rute untuk halaman dashboard, memanggil method index dari controller Dashboard
