<?php

namespace CoffeShop\Controllers;

class Profile
{
    private $view;
    private $user;
    private $session;


    public function __construct($view, $user, $session)
    {
        $this->view = $view;
        $this->user = $user;
        $this->session = $session;
    }


    public function index($request, $response)
    {
        return $this->view->render($response, 'profile.php');
    }
};



