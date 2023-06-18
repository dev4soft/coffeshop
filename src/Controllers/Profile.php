<?php

namespace CoffeShop\Controllers;

class Profile
{
    private $view;
    private $orders;
    private $session;


    public function __construct($view, $orders, $session)
    {
        $this->view = $view;
        $this->orders = $orders;
        $this->session = $session;
    }


    public function index($request, $response)
    {
        return $this->view->render($response, 'profile.php');
    }


    public function bidSaved($request, $response)
    {
        return $this->view->render($response, 'bid_saved.php');
    }


    public function listOrders($request, $response)
    {
        $user_id = $this->session->user_id;

        if (!$user_id) {
            return $response->withJson([
                'error' => 1,
                'url' => '/login',
            ]);
        }

        $list_orders = $this->orders->listOrders($user_id);

        return $response->withJson($list_orders);
    }


    public function orderItems($request, $response)
    {
        $user_id = $this->session->user_id;

        if (!$user_id) {
            return $response->withJson([
                'error' => 1,
                'url' => '/login',
            ]);
        }

        $order_id = (int)$request->getAttribute('order_id');

        $order_items = $this->orders->orderItems($user_id, $order_id);

        return $response->withJson($order_items);
    }
};



