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


    public function isAdmin($request, $response, $next)
    {
        if ((int)$this->access() !== 9) {
            return $response->withRedirect('/login');
        }

        return $next($request, $response);
    }


    public function apiAdmin($request, $response, $next)
    {
        if ((int)$this->access() !== 9) {
            return $response->withJson([
                'error' => 1,
                'url' => '/login',
            ]);
        }

        return $next($request, $response);
    }
};



