<?php

use App\Routes;

include_once '../support.php';

include_once '../vendor/autoload.php';

(new Routes)->handleRequest(
    parse_url($_SERVER['REQUEST_URI'])['path']
);
