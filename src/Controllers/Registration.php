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


    public function save($request, $response)
    {
        $data = $request->getParsedBody();
        $first_name = htmlspecialchars($data['first_name']);
        $last_name = htmlspecialchars($data['last_name']);
        $email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
        $pass1 = $data['pass1'];
        $pass2 = $data['pass2'];

        // проверка данных формы
        // на не пустой адрес почты
        if (empty($email)) {

            return $response->withJson([
                'error' => 1,
                'message' => 'на задан email!'
            ]);
        }

        // на одинаковый пароль
        if (empty($pass1) || $pass1 != $pass2) {

            return $response->withJson([
                'error' => 1,
                'message' => 'пустой или несовпадающие пароли!'
            ]);
        }

        $result = $this->user->add($first_name, $last_name, $email, $pass1);

        if ($result['result'] == -1) {

            if ($result['errcode'] == 1062) {
                $message = 'Аккаунт с таким почтовым адресом уже зарегистрирован';
            } else {
                $message = 'Произошла ошибка при записи';
            }

            return $response->withJson([
                'error' => 1,
                'message' => $message,
            ]);
        }

        return $response->withJson([
            'error' => 0,
            'message' => 'Ok',
        ]);
    }
};


