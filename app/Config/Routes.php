<?php

use CodeIgniter\Router\RouteCollection;


/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// Route since we don't have to scan directories.
$routes->get('/', 'UserCrud::index');

// CRUD RESTful Routes
$routes->get('mahasiswa-list', 'UserCrud::admin');
$routes->get('user-form', 'UserCrud::create');
$routes->post('submit-form', 'UserCrud::store');
$routes->get('edit-view/(:num)', 'UserCrud::singleUser/$1');
$routes->post('update', 'UserCrud::update');
$routes->get('delete/(:num)', 'UserCrud::delete/$1');

