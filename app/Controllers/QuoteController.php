<?php

namespace App\Controllers;

class QuoteController extends BaseController
{
    public function renderView()
    {
        include __DIR__. '/../views/quote.php';
    }
}