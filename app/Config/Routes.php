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
$routes->setDefaultController('dashboard');
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
$routes->get('/login', 'login::index');

$routes->get('/', function() {
	if (empty(session()->get('user_data'))){
		return redirect()->to('/backend')->with('fail', 'You have to loggedIn!');
	}
});	
$routes->group('/admin', ['filter'=>'AdminCheck'], function($routes){
	$routes->get('dashboard', 'admin::dashboard');
	$routes->get('(:segment)', 'admin::view/$1');
	$routes->get('api/(:segment)', 'admin::fetch_api/$1');
	$routes->get('(:alpha)/profile/(:alphanum)', 'admin::display/$1/$2');
});
$routes->group('/student', ['filter'=>'StudentCheck'], function($routes){
	$routes->get('dashboard', 'student::dashboard');
	$routes->get('(:segment)', 'student::view/$1');

});

$routes->group('/teacher', ['filter'=>'TeacherCheck'], function($routes){
	$routes->get('dashboard', 'teacher::dashboard');
	$routes->get('(:segment)', 'teacher::view/$1');
	$routes->post('assignments/create', 'teacher::create');
});







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
