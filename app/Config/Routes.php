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

//admin
$routes->get('/admins', 'Admin::index', ['filter' => 'auth']);
//mata kuliah
$routes->get('/dmatkul', 'Admin::matkul', ['filter' => 'auth']);
$routes->get('/tambah', 'Admin::tmatkul', ['filter' => 'auth']);
$routes->get('/editmk/(:any)', 'Admin::editmk/$1', ['filter' => 'auth']);
$routes->get('/hapusmk/(:any)', 'Admin::hapusmk/$1', ['filter' => 'auth']);

// mata kuliah presensi
$routes->get('/presensiMatkul', 'Admin::pesensiMatkul', ['filter' => 'auth']);
$routes->get('/tambahP', 'Admin::tmatkulp', ['filter' => 'auth']);
$routes->get('/editmkp/(:any)', 'Admin::editmkp/$1', ['filter' => 'auth']);
$routes->get('/hapusmkp/(:any)', 'Admin::hapusmkp/$1', ['filter' => 'auth']);

//mahasiswa presensi
$routes->get('/mahasiswa', 'Admin::mahasiswa', ['filter' => 'auth']);
$routes->get('/editmhs/(:any)', 'Admin::editmhs/$1', ['filter' => 'auth']);

//user
$routes->get('/presensi/(:any)/(:any)/(:any)', 'Presensi::index/$1/$2/$3', ['filter' => 'auth']);
$routes->get('/matakuliah', 'MataKuliah::index', ['filter' => 'auth']);
$routes->get('/matakuliah/(:any)', 'MataKuliah::detailMatkul/$1', ['filter' => 'auth']);
$routes->get('/', 'Home::index', ['filter' => 'auth']);
$routes->post('form-submit', 'Register::googleCaptachStore');
//regoster login
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');
$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');
$routes->get('form', 'RegisterController::index');
$routes->post('form-submit', 'RegisterController::googleCaptachStore');




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
