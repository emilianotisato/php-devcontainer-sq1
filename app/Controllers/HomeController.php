<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function renderView()
    {
        include __DIR__. '/../views/home.php';
    }
}