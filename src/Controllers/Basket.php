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
        $user_name = $this->session->username;

        return $this->view->render($response, 'cart.php', ['username' => $user_name]);
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

        return $response->withJson([
            'error' => 0,
        ]);
    }


    public function summaCart($request, $response)
    {
        $user_id = $this->session->user_id;
        $sum_cart = $this->product->summaCart($user_id);

        return $response->withJson([
            'sum_cart' => $sum_cart,
        ]);
    }


    public function productsInCart($request, $response)
    {
        $user_id = $this->session->user_id;
        $in_cart = $this->product->inCart($user_id);

        return $response->withJson($in_cart);
    }


    public function changeQuantity($request, $response)
    {
        $user_id = $this->session->user_id;

        if (!$user_id) {

            return $response->withJson([
                'error' => 1,
                'url' => '/login',
            ]);
        }

        $data = $request->getParsedBody();
        $product_id = htmlspecialchars($data['product_id']);
        $direct = filter_var($data['direct'], FILTER_VALIDATE_INT);

        if ($direct === 1 || $direct === -1) {
            $this->product->changeQuantity($user_id, $product_id, $direct);
        }

        $in_cart = $this->product->inCart($user_id);

        return $response->withJson($in_cart);
    }


    public function changeTrait($request, $response)
    {
        $user_id = $this->session->user_id;

        if (!$user_id) {

            return $response->withJson([
                'error' => 1,
                'url' => '/login',
            ]);
        }

        $data = $request->getParsedBody();
        $product_order_id = filter_var($data['product_order_id'], FILTER_VALIDATE_INT);
        $new_product_id = filter_var($data['new_product_id'], FILTER_VALIDATE_INT);

        if ($product_order_id && $new_product_id) {
            $this->product->changeTrait($user_id, $product_order_id, $new_product_id);
        }

        $in_cart = $this->product->inCart($user_id);

        return $response->withJson($in_cart);
    }


    public function saveBid($request, $response)
    {
        $user_id = $this->session->user_id;

        if (!$user_id) {
            return $response->withJson([
                'error' => 0,
                'url' => '/login',
            ]);
        }

        $data = $request->getParsedBody();
        $address = htmlspecialchars($data['address']);
        $phone = htmlspecialchars($data['phone']);
        $comments = htmlspecialchars($data['comments']);

        $result = $this->product->saveBid($user_id, $address, $phone, $comments);

        if ($result === 1) {
            return $response->withJson([
                'error' => 0,
                'url' => '/profile',
            ]);
        }

        $in_cart = $this->product->inCart($user_id);

        return $response->withJson([
                'error' => 1,
                'url' => '/login',
            ]);
    }


    public function getTraites($request, $response)
    {
        $product_id = (int)$request->getAttribute('product_id');

        $traites = $this->product->getTraites($product_id);

        return $response->withJson($traites);
    }
};

