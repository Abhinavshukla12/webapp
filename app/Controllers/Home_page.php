<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home_page extends BaseController
{
    public function index()
    {
        $data = [];
        return view('layout/index', $data);
    }
}
