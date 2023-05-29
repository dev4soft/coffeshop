<?php

namespace CoffeShop\Controllers;

class Registration
{
    private $view;
    private $user;


    public function __construct($view, $user)
    {
        $this->view = $view;
        $this->user = $user;
    }


    public function form($request, $response)
    {
        return $this->view->render($response, 'registration.php');
    }
};


