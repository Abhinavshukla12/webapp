<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//for login 
$routes->get('form', 'Validation::index');
$routes->post('validation/submit', 'Validation::submit');

//home page
$routes->get('index', 'Home_page::index');