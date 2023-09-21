<?php

namespace App\Controllers;

class ProductsController extends BaseController
{
    public function renderView()
    {
        include __DIR__. '/../views/products.php';
    }
}