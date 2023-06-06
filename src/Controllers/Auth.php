<?php

namespace CoffeShop\Controllers;

class Auth
{
    private $session;


    public function __construct($session)
    {
        $this->session = $session;
    }


    private function access()
    {
        return $this->session->user_id;
    }


    public function check($request, $response, $next)
    {
        if (!$this->access()) {
            return $response->withRedirect('/login');
        }

        return $next($request, $response);
    }
};



