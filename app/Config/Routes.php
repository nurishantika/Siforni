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

$routes->get('/pages/masuk', 'Masuk::index');

// Admin's Routes

$routes->get('/admin', 'admin::index', ['filter' => 'auth_admin']);

$routes->get('/admin/berita/create', 'berita::create', ['filter' => 'auth_admin']);

$routes->get('/admin/lowongan/create', 'lowongan::create', ['filter' => 'auth_admin']);

$routes->get('/admin/berita/', 'berita::berita', ['filter' => 'auth_admin']);

$routes->get('/admin/lowongan/', 'lowongan::lowongan', ['filter' => 'auth_admin']);

$routes->get('/admin/data/data_alumni', 'alumni::alumni', ['filter' => 'auth_admin']);

$routes->get('/admin/data/create', 'alumni::nilai', ['filter' => 'auth_admin']);

$routes->get('/nilai/create/(:segment)', 'nilai::create/$1', ['filter' => 'auth_admin']);

$routes->delete('/alumni/(:num)', 'Alumni::delete/$1', ['filter' => 'auth_admin']);

$routes->get('/nilai/(:num)', 'Nilai::detail/$1', ['filter' => 'auth_admin']);

$routes->delete('/berita/(:num)', 'berita::delete/$1', ['filter' => 'auth_admin']);

$routes->delete('/lowongan/(:num)', 'lowongan::delete/$1', ['filter' => 'auth_admin']);

$routes->delete('/admin/alumni/(:num)', 'admin::delete/$1', ['filter' => 'auth_admin']);

$routes->get('/admin/berita/(:segment)', 'berita::detailadm/$1', ['filter' => 'auth_admin']);

$routes->get('/admin/data/detail/(:any)', 'alumni::detailalm/$1', ['filter' => 'auth_admin']);

$routes->get('/admin/lowongan/(:segment)', 'lowongan::detailadm/$1', ['filter' => 'auth_admin']);

$routes->get('/berita/berita', 'berita::berita', ['filter' => 'auth_admin']);

$routes->get('/lowongan/lowongan', 'lowongan::lowongan', ['filter' => 'auth_admin']);

// Alumni's Routes

$routes->get('/alumni/homepage', 'alumni::homepage', ['filter' => 'auth_alumni']);

$routes->get('/alumni/data', 'alumni::data', ['filter' => 'auth_alumni']);

$routes->get('/alumni/berita', 'alumni::berita', ['filter' => 'auth_alumni']);

$routes->get('/alumni/berita_detail/(:segment)', 'alumni::berita_detail/$1', ['filter' => 'auth_alumni']);

$routes->get('/alumni/lowongan', 'alumni::lowongan', ['filter' => 'auth_alumni']);

$routes->get('/alumni/lowongan_detail/(:segment)', 'alumni::lowongan_detail/$1', ['filter' => 'auth_alumni']);

$routes->get('/alumni/profil', 'alumni::profil', ['filter' => 'auth_alumni']);

$routes->get('/alumni/detailed/(:segment)', 'alumni::detailed/$1', ['filter' => 'auth_alumni']);

$routes->get('/alumni/edit/(:segment)', 'alumni::edit/$1', ['filter' => 'auth_alumni']);

$routes->get('/alumni/update', 'alumni::update', ['filter' => 'auth_alumni']);

$routes->get('/delete_pekerjaan/(:any)', 'alumni::delete_pekerjaan/$1', ['filter' => 'auth_alumni']);

$routes->get('/nilai/details/(:any)', 'nilai::details/$1', ['filter' => 'auth_alumni']);

$routes->get('/nilai/nilai', 'nilai::nilai', ['filter' => 'auth_alumni']);

// User's Routes

$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);

$routes->get('/admin', 'Admin::index', ['filter' => 'auth']);

$routes->get('/alumni/create', 'alumni::create');

$routes->get('/alumni/detail/(:segment)', 'alumni::detail/$1');

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
