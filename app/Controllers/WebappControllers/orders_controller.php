<?php

namespace App\Controllers\WebappControllers;

use App\Controllers\BaseController;

class orders_controller extends BaseController
{
    public function orders()
    {
        $data = [];
        return view('WebappViews/dashboard/orders', $data);
    }
}
