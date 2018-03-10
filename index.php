<?php

function loadProducts()
{
    if (!file_exists('products.txt')){
        return [];
    }
    $products = file_get_contents('products.txt');

    return unserialize($products);
}

include "layout.phtml";