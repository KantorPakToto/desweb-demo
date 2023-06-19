<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/pos/(:segment)', 'Pos::index/$1');
$routes->get('/grafik/(:segment)/(:segment)', 'Grafik::index/$1/$2');

// ==========================================

$routes->get('/api/service1/', 'Api::service_bsa1');
$routes->get('/api/service2/', 'Api::service_bsa10');
$routes->get('/api/service3/', 'Api::service_bpk8');
$routes->get('/api/service4/', 'Api::service_bmj1');
$routes->get('/api/bsa1/(:segment)/(:segment)/', 'Api::bsa1/$1/$2');
$routes->get('/api/bsa10/(:segment)/(:segment)/', 'Api::bsa10/$1/$2');
$routes->get('/api/bpk8/(:segment)/(:segment)/', 'Api::bpk8/$1/$2');
$routes->get('/api/bmj1/(:segment)/(:segment)/', 'Api::bmj1/$1/$2');
$routes->get('/api/bsa1/(:segment)/', 'Api::get_bsa1/$1');
$routes->get('/api/bsa10/(:segment)/', 'Api::get_bsa10/$1');
$routes->get('/api/bpk8/(:segment)/', 'Api::get_bpk8/$1');
$routes->get('/api/bmj1/(:segment)/', 'Api::get_bmj1/$1');
$routes->get('/api/debitbsa1/(:segment)/', 'Api::get_debit_bsa1/$1');
$routes->get('/api/debitbsa10/(:segment)/', 'Api::get_debit_bsa10/$1');
$routes->get('/api/debitbpk8/(:segment)/', 'Api::get_debit_bpk8/$1');
$routes->get('/api/debitbmj1/(:segment)/', 'Api::get_debit_bmj1/$1');
$routes->get('/api/supplaibsa1/', 'Api::get_supply_bsa1');
$routes->get('/api/supplaibsa10/', 'Api::get_supply_bsa10');
$routes->get('/api/supplaibpk8/', 'Api::get_supply_bpk8');
/*
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
