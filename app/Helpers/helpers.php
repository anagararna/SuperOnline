<?php

use App\Models\Category;
use App\Models\Product;

function miFuncion()
{
    $categorias = Category::with('subcategories.products')->get();
    return $categorias;
}
