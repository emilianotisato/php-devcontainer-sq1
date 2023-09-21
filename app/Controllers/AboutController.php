<?php

namespace App\Controllers;

class AboutController extends BaseController
{
    public function renderView()
    {
        include __DIR__. '/../views/about.php';
    }
}