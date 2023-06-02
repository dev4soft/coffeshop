<?php

namespace CoffeShop\Models;

class User
{
    private $db;


    public function __construct($db)
    {
        $this->db = $db;
    }


    public function add($first_name, $last_name, $email, $pass)
    {
        $result = $this->db->insertData(
            'insert into users (first_name, last_name, email, pass)
            values (:first_name, :last_name, :email, :pass)',
            [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'pass' => $pass,
            ]
        );

        return [
            'result'  => $result,
            'errcode' => ($result === -1) ? $this->db->errInfo[1] : '',
        ];
    }


    public function checkpass($email, $pass)
    {
        $result = $this->db->getRow(
            'select user_id, first_name, pass from users where email = :email',
            [
                'email' => $email,
            ]
        );

        if (!count($result)) {
            return false;
        }

        $this->session->username = $result['first_name'];
        $this->session->user_id = $result['user_id'];

        return password_verify($pass, $result['pass']);
    }
}

