<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [];
        return view('dashboard/index', $data);
    }
    public function product()
    {
        $data = [];
        return view('dashboard/product', $data);
    }
    public function about()
    {
        $data = [];
        return view('dashboard/about', $data);
    }
    public function contact()
    {
        $data = [];
        return view('dashboard/contact', $data);
    }
    public function cart()
    {
        $data = [];
        return view('dashboard/cart', $data);
    }
    public function notification()
    {
        $data = [];
        return view('dashboard/notification', $data);
    }
    public function account()
    {
        $data = [];
        return view('dashboard/account', $data);
    }
    public function profile()
    {
        $data = [];
        return view('dashboard/profile', $data);
    }
    public function orders()
    {
        $data = [];
        return view('dashboard/orders', $data);
    }
    public function logout()
    {
        $data = [];
        return view('dashboard/logout', $data);
    }
}
