<?php

namespace App\Controllers\WebappControllers;

use App\Controllers\BaseController;

class settings_controller extends BaseController
{
    public function settings()
    {
        $data = [];
        return view('WebappViews/dashboard/settings', $data);
    }
}
