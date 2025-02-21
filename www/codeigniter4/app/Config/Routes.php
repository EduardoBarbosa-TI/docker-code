<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Site');
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


$routes->get('/', 'Site::index');
$routes->get('/home', 'Site::view/home');
$routes->get('/about', 'Site::view/about');

$routes->get('/listProducts', 'Product::listProducts');

$routes->get('/admin', 'Admin\Admin::index');
$routes->get('/admin/login', 'Admin\Admin::login');
$routes->get('/admin/logout', 'Admin\Admin::logout');

$routes->add('/admin/validateLogin', 'Admin\User::validateLogin');

//clients
$routes->add('/admin/client/register', 'Admin\Client::registerClients');
$routes->add('/admin/client/list', 'Admin\Client::listClients');
$routes->add('/admin/client/consult/(:num)', 'Admin\Client::consultClients/$1');
$routes->add('/admin/client/update/(:num)', 'Admin\Client::updateClient/$1');
$routes->add('/admin/client/delete/(:num)', 'Admin\Client::deleteClient/$1');
$routes->add('/admin/client/search', 'Admin\Client::listClientSearch');

//products
$routes->add('/admin/product/register', 'Admin\Product::registerProducts');
$routes->add('/admin/product/list', 'Admin\Product::listProducts');
$routes->add('/admin/product/consult/(:num)', 'Admin\Product::consultProducts/$1');
$routes->add('/admin/product/update/(:num)', 'Admin\Product::updateProducts/$1');
$routes->add('/admin/product/delete/(:num)', 'Admin\Product::deleteProducts/$1');

//contacts
$routes->add('/admin/contact/register', 'Admin\Contact::registerContacts');
$routes->add('/admin/contact/list', 'Admin\Contact::listContacts');
$routes->add('/admin/contact/consult/(:num)', 'Admin\Contact::consultContacts/$1');
$routes->add('/admin/contact/update/(:num)', 'Admin\Contact::updateContact/$1');
$routes->add('/admin/contact/delete/(:num)', 'Admin\Contact::deleteContact/$1');

//API
$routes->get('/client', 'Api\Client::listClients');

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
