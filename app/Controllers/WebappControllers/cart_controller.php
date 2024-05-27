<?php

namespace App\Controllers\WebappControllers;

use App\Controllers\BaseController;

class cart_controller extends BaseController
{
    public function cart()
    {
        $data = [];
        return view('WebappViews/dashboard/cart', $data);
    }
}
