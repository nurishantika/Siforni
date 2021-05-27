<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Pages::index');

// Admin's Routes

$routes->get('/admin', 'admin::index');

$routes->get('/admin/berita/create', 'berita::create');

$routes->get('/admin/lowongan/create', 'lowongan::create');

$routes->get('/admin/berita/', 'berita::berita');

$routes->get('/admin/lowongan/', 'lowongan::lowongan');

$routes->get('/admin/data/data_alumni', 'alumni::alumni');

$routes->get('/admin/data/create', 'alumni::nilai');

$routes->delete('/alumni/(:num)', 'Alumni::delete/$1');

$routes->get('/nilai/(:num)', 'Nilai::detail/$1');

$routes->delete('/berita/(:num)', 'berita::delete/$1');

$routes->delete('/lowongan/(:num)', 'lowongan::delete/$1');

$routes->delete('/admin/alumni/(:num)', 'admin::delete/$1');

$routes->get('/admin/berita/(:segment)', 'berita::detailadm/$1');

$routes->get('/admin/data/detail/(:any)', 'alumni::detailalm/$1');

$routes->get('/admin/lowongan/(:segment)', 'lowongan::detailadm/$1');

// Alumni's Routes

$routes->get('/alumni/homepage', 'alumni::homepage');

$routes->get('/alumni/data', 'alumni::data');

$routes->get('/alumni/berita', 'alumni::berita');

$routes->get('/berita_detail/(:segment)', 'alumni::berita_detail/$1');

$routes->get('/alumni/lowongan', 'alumni::lowongan');

$routes->get('/lowongan_detail/(:segment)', 'alumni::lowongan_detail/$1');

$routes->get('/alumni/detail/(:numeric)', 'alumni::detailed/$1');

// User's Routes

$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);

$routes->get('/admin', 'Admin::index', ['filter' => 'auth']);

$routes->get('/alumni/create', 'alumni::create');

$routes->get('/alumni/(:segment)', 'alumni::detail/$1');

$routes->get('/berita/(:segment)', 'berita::detail/$1');

$routes->get('/lowongan/(:segment)', 'lowongan::detail/$1');


// $routes->get('/dataalumni/create/form_input', 'DataAlumni::create');

// $routes->get('/dataalumni/create/save', 'DataAlumni::save');
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
