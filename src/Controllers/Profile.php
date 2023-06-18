<?php

namespace CoffeShop\Controllers;

class Profile
{
    private $view;
    private $order;
    private $session;


    public function __construct($view, $order, $session)
    {
        $this->view = $view;
        $this->order = $order;
        $this->session = $session;
    }


    public function index($request, $response)
    {
        return $this->view->render($response, 'profile.php');
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
    }
};



