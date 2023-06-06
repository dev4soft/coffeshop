<?php

namespace CoffeShop\Controllers;

class Basket
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


    public function cart($request, $response)
    {
        return $this->view->render($response, 'cart.php');
    }


    public function addToCart($request, $response)
    {
        $data = $request->getParsedBody();
        $product_id = htmlspecialchars($data['product_id']);
        $user_id = $this->session->user_id;

        if (!$user_id) {

            return $response->withJson([
                'error' => 1,
                'url' => '/login',
            ]);
        }

        $this->product->addToOrder($product_id, $user_id);

        $product_in_cart = 0; //$this->product->productInCart($user_id);

        return $response->withJson([
            'error' => 0,
            'url' => '/product',
        ]);
    }
};

