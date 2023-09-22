<?php

namespace App\Controllers;

class ProductsController extends BaseController
{
    public function renderView()
    {
        // llamado a base de datos
        // manipulacion y enriquecimiento de datos
        // preparar datos para la vista
       
        include __DIR__. '/../views/products.php';
    }
}