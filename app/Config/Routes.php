<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Load separate route filess
require APPPATH . 'Routes/webapp_routes.php';