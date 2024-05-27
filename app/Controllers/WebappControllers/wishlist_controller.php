<?php

namespace App\Controllers\WebappControllers;

use App\Controllers\BaseController;

class wishlist_controller extends BaseController
{
    public function wishlist()
    {
        $data = [];
        return view('WebappViews/dashboard/wishlist', $data);
    }
}
