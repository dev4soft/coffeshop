<?php

namespace CoffeShop\Controllers;

class Adminka
{
    private $view;
    private $user;
    private $orders;
    private $session;


    public function __construct($view, $orders, $user, $session)
    {
        $this->view = $view;
        $this->orders = $orders;
        $this->user = $user;
        $this->session = $session;
    }


    public function form($request, $response)
    {
        return $this->view->render($response, 'adminka.php');
    }


    public function listBids($request, $response)
    {
        $list_bids = $this->orders->listBids();

        return $response->withJson($list_bids);
    }


    public function bidItems($request, $response)
    {
        $order_id = (int)$request->getAttribute('order_id');

        $order_items = $this->orders->bidItems($order_id);

        return $response->withJson($order_items);
    }
};



