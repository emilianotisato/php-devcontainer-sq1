<?php

namespace App\Controllers;

use App\Models\Database;
use App\Models\Seller;

class QuoteController extends BaseController
{
    public function renderView()
    {

        $sellers = Seller::all();

        include __DIR__. '/../views/quote.php';
    }
}