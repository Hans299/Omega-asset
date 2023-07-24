<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Frontend\MainController');
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
$routes->get('/', 'Frontend\MainController::index');
$routes->get('/en', 'Frontend\Language::en');
$routes->get('/id', 'Frontend\Language::id');

$routes->get('/about-us', 'Frontend\MainController::about');

$routes->get('/contact-us', 'Frontend\ContactController::index');
$routes->post('/contact-us/sendmail', 'Frontend\ContactController::sendmail');


//$routes->get('/destination/(:any)', 'Frontend\DestinationController::country/$1');
$routes->get('/destination/australia', 'Frontend\DestinationController::australia');
$routes->get('/destination/canada', 'Frontend\DestinationController::canada');
$routes->get('/destination/china', 'Frontend\DestinationController::china');
$routes->get('/destination/malaysia', 'Frontend\DestinationController::malaysia');
$routes->get('/destination/new-zealand', 'Frontend\DestinationController::newzealand');
$routes->get('/destination/singapore', 'Frontend\DestinationController::singapore');
$routes->get('/destination/united-kingdom', 'Frontend\DestinationController::unitedkingdom');
$routes->get('/destination/united-states', 'Frontend\DestinationController::unitedstates');

$routes->get('/team', 'Frontend\TeamController::index');
$routes->get('/team/(:any)', 'Frontend\TeamController::member/$1');

$routes->get('/register', 'Frontend\RegisterController::show/marketing');
$routes->get('/register/ref/(:any)', 'Frontend\RegisterController::show/$1');
$routes->post('/register', 'Frontend\RegisterController::store');

$routes->get('/event', 'Frontend\EventController::index');
$routes->get('/event/(:any)', 'Frontend\EventController::show/$1');
$routes->post('/event', 'Frontend\EventController::store');


$routes->get('/auth/login', 'AuthController::index');
$routes->post('/auth/login', 'AuthController::login');
$routes->get('/auth/forget-password', 'AuthController::forgetPassword');
$routes->post('/auth/forget-password', 'AuthController::forgetPasswordPost');
$routes->get('/account/logout', 'AuthController::logout');

$routes->get('/account', 'Backend/Dashboard::index');
$routes->get('/account/dashboard', 'Backend/Dashboard::index');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
