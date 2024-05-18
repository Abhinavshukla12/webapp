<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//for login 
$routes->get('form', 'Validation::index');
$routes->post('validation/submit', 'Validation::submit');

//home page
$routes->get('index', 'DashboardController::index');
$routes->get('product', 'DashboardController::product');
$routes->get('about', 'DashboardController::about');
$routes->get('contact', 'DashboardController::contact');
$routes->get('cart', 'DashboardController::cart');
$routes->get('notification', 'DashboardController::notification');
$routes->get('account', 'DashboardController::account');
$routes->get('profile', 'DashboardController::profile');
$routes->get('orders', 'DashboardController::orders');
$routes->get('logout', 'DashboardController::logout');