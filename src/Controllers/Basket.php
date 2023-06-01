<?php

namespace CoffeShop\Controllers;

class Basket
{
    private $view;
    private $product;


    public function __construct($view, $product)
    {
        $this->view = $view;
        $this->product = $product;
    }


    public function cart($request, $response)
    {
        return $this->view->render($response, 'cart.php');
    }
};

