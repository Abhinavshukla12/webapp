<?php

namespace Config;

$routes = Services::routes();
//all routes started here 
$routes->group('ecom/', ['namespace' => 'App\Controllers\WebappControllers'], static function ($routes) {
    
    //project routes
    $routes->get('index', 'Dashboard_controller::index');
    $routes->get('shop', 'Shop_controller::shop');
    $routes->get('cart', 'cart_controller::cart');
    $routes->get('wishlist', 'wishlist_controller::wishlist');
    $routes->get('profile', 'profile_controller::profile');
    $routes->get('orders', 'orders_controller::orders');
    $routes->get('settings', 'settings_controller::settings');
    $routes->get('logout', 'logout_controller::logout');
});
//routes end 