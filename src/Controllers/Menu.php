<?php

namespace CoffeShop\Controllers;

class Menu
{
    private $view;
    private $product;


    public function __construct($view, $product)
    {
        $this->view = $view;
        $this->product = $product;
    }


    public function product($request, $response)
    {
        return $this->view->render($response, 'product.html');
    }
};

