<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home/index', 'Home::index');

$routes->get('/admin/index', 'Admin::index');
$routes->get('/admin', 'Admin::index');

$routes->get('/admin/dashboard', 'Admin::dashboard');
$routes->get('/admin', 'Admin::dashboard');

$routes->get('/admin/charts', 'Admin::charts');
$routes->get('/admin', 'Admin::charts');

$routes->get('/admin/forms', 'Admin::forms');
$routes->get('/admin', 'Admin::forms');

$routes->get('/admin/panels', 'Admin::panels');
$routes->get('/admin', 'Admin::panels');

$routes->get('/admin/tables', 'Admin::tables');
$routes->get('/admin', 'Admin::tables');

$routes->get('/admin/widgets', 'Admin::widgets');
$routes->get('/admin', 'Admin::widgets');

$routes->get('/admin/login', 'Admin::index');
$routes->get('/admin', 'Admin::index');


$routes->get('/admin/belajar-hitung/(:num)/(:num)','Admin::hitung/$1/$2');
$routes->get('/admin/belajar-banding/(:num)/(:num)','Admin::pembanding/$1/$2');
$routes->get('/admin/belajar-string/','Admin::Karakter');
$routes->get('/admin/belajar-form/','Admin::implementasi_form');
$routes->post('/admin/post-form/','Admin::post_form');
$routes->get('/admin/forms-sukses/','Admin::forms_sukses');