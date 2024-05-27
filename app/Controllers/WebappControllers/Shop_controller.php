<?php

namespace App\Controllers\WebappControllers;

use App\Controllers\BaseController;

class Shop_controller extends BaseController
{
    public function shop()
    {
        $data = [];
        return view('WebappViews/dashboard/shop', $data);
    }
}
