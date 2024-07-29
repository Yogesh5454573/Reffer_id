<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('add', 'Home::add');
$routes->get('edit/(:num)', 'Home::edit/$1');

$routes->post('addData', 'Home::addData');
$routes->post('getData', 'Home::getData');
$routes->post('update/(:num)', 'Home::update/$1');
$routes->post('delete/(:num)', 'Home::delete/$1');









