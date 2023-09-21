<?php

namespace App;

use App\Controllers\AboutController;
use App\Controllers\HomeController;
use App\Controllers\ProductsController;
use App\Controllers\QuoteController;

class Routes
{
    protected array $routes = [
        '/' => HomeController::class,
        '/about' => AboutController::class,
        '/products' => ProductsController::class,
        '/quote' => QuoteController::class,
    ];

    public function handleRequest(string $path)
    {
        if(array_key_exists($path, $this->routes)){
            (new $this->routes[$path])->renderView();
        } else {
            http_response_code(404);
            include '../app/views/errors/404.php';
        }
    }
}