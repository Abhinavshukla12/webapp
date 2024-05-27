<?php

namespace App\Controllers\WebappControllers;

use App\Controllers\BaseController;

class profile_controller extends BaseController
{
    public function profile()
    {
        $data = [];
        return view('WebappViews/dashboard/profile', $data);
    }
}
