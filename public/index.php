<?php

include_once '../support.php';

include '../vendor/autoload.php';

$requestedUrl = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => '../home.php',
    '/about' => '../about.php',
    '/products' => '../products.php',
    '/quote' => '../quote.php'
];


if(array_key_exists($requestedUrl, $routes)){
    include $routes[$requestedUrl];
} else {
    http_response_code(404);
    include '../app/views/errors/404.php';
}
