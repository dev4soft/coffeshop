<?php

namespace CoffeShop\Controllers;

class MainForm
{
    private $view;
    private $product;
    private $session;


    public function __construct($view, $product, $session)
    {
        $this->view = $view;
        $this->product = $product;
        $this->session = $session;
    }


    private function summaCart()
    {
        $user_id = $this->session->user_id;

        return $this->product->summaCart($user_id);
    }


    public function index($request, $response)
    {
        return $this->view->render(
            $response,
            'index.php',
            [
                'summa_cart' => $this->summaCart(),
            ]
        );
    }


    public function contacts($request, $response)
    {
        return $this->view->render(
            $response,
            'contacts.php',
            [
                'summa_cart' => $this->summaCart(),
            ]
        );
    }


    public function about($request, $response)
    {
        return $this->view->render(
            $response,
            'about.php',
            [
                'summa_cart' => $this->summaCart(),
            ]
        );
    }
};

