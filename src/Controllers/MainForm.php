<?php

namespace CoffeShop\Controllers;

class MainForm
{
    private $view;
    private $product;


    public function __construct($view, $product)
    {
        $this->view = $view;
        $this->product = $product;
    }


    public function index($request, $response)
    {
        return $this->view->render($response, 'index.php');
    }


    public function contacts($request, $response)
    {
        return $this->view->render($response, 'contacts.php');
    }


    public function about($request, $response)
    {
        $response->getBody()->write("About of us");

        return $response;
    }
};

