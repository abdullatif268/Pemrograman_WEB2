<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/contact', 'Contact::index');
$routes->get('/contact/create', 'Contact::create');
$routes->post('/contact/store', 'Contact::store');
$routes->get('/contact/edit/(:num)', 'Contact::edit/$1');
$routes->post('/contact/update/(:num)', 'Contact::update/$1');
$routes->get('/contact/delete/(:num)', 'Contact::delete/$1');

