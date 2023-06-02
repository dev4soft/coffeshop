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
        $email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);
        $pass1 = $data['pass1'];
        $pass2 = $data['pass2'];

        // проверка данных формы
        // на не пустой адрес почты
        if (!$email) {

            return $response->withJson([
                'error' => 1,
                'message' => 'не корректный email!'
            ]);
        }

        // на одинаковый пароль
        if (empty($pass1) || $pass1 != $pass2) {

            return $response->withJson([
                'error' => 1,
                'message' => 'пустой или несовпадающие пароли!'
            ]);
        }

        $hash = password_hash($pass1, PASSWORD_BCRYPT);

        $result = $this->user->add($first_name, $last_name, $email, $hash);

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

        error_log('user save');
        return $response->withJson([
            'error' => 0,
            'message' => 'Ok',
        ]);
    }
};


