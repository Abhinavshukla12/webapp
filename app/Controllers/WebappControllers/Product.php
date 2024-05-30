<?php 

namespace App\Controllers\WebappControllers;
use App\Controllers\BaseController;

class Product extends BaseController
{
    public function detail($product_id)
    {
        return view('WebappViews/product_detail', ['product_id' => $product_id]);
    }
}
