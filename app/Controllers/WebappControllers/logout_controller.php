<?php

namespace App\Controllers\WebappControllers;

use App\Controllers\BaseController;

class logout_controller extends BaseController
{
    public function logout()
    {
        $data = [];
        return view('WebappViews/dashboard/logout', $data);
    }
}
