<?php

namespace CoffeShop\Controllers;

class Shop
{
    private $product;


    public function __construct($product)
    {
        $this->product = $product;
    }


    public function category($request, $response)
    {
        $category = $this->product->listCategory();

        return $response->withJson($category);
    }
};

