<?php

namespace CoffeShop\Controllers;

class Login
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


    public function form($request, $response)
    {
        return $this->view->render($response, 'login.php');
    }


    public function check($request, $response)
    {
        $data = $request->getParsedBody();
        $pass = htmlspecialchars($data['pass']);
        $email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);

        if (!$this->user->checkpass($email, $pass)) {
            return $response->withRedirect('/login');
        }

        // запрашиваем данные о пользователе
        $result = $this->user->info($email);

        $this->session->username = $result['first_name'];
        $this->session->user_id = $result['user_id'];

        if ($result['user_id'] == 9) {
            return $response->withRedirect('/admin');
        }

        return $response->withRedirect('/');
    }
};



