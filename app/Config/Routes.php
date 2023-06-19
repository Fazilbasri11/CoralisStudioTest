<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'LandingPageController::index', ['filter' => 'auth']);


$routes->get('/register','RegisterController::index');
$routes->post('/register/submit','RegisterController::store');

$routes->get('/login','LoginController::index');
$routes->post('/login/submit', 'LoginController::authenticate');
$routes->get('/logout', 'LoginController::logout', ['as' => 'logout']);



$routes->get('forgot-password', 'ForgotPasswordController::index', ['as' => 'forgotPassword']);
$routes->post('send-reset-link', 'ForgotPasswordController::sendResetLink', ['as' => 'sendResetLink']);

$routes->get('/changepassword', 'UserController::index');
$routes->post('/change-password', 'UserController::changePassword');

$routes->get('instansi', 'Instansi::index');
$routes->get('instansi/create', 'Instansi::create');
$routes->post('instansi/store', 'Instansi::store');
$routes->get('instansi/edit/(:num)', 'Instansi::edit/$1');
$routes->post('instansi/update/(:num)', 'Instansi::update/$1');
$routes->get('instansi/delete/(:num)', 'Instansi::delete/$1');




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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}