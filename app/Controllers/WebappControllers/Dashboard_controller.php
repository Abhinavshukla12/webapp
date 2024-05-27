<?php

namespace App\Controllers\WebappControllers;

use App\Controllers\BaseController;

class Dashboard_controller extends BaseController
{
    public function index()
    {
        $data = [];
        return view('WebappViews/dashboard/index', $data);
    }
}
