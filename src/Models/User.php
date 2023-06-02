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
        $hash = $this->db->getValue(
            'select pass from users where email = :email',
            [
                'email' => $email,
            ]
        );

        if (empty($hash)) {
            return false;
        }

        return password_verify($pass, $hash);
    }


    public function info($email)
    {
        return $this->db->getRow(
            'select user_id, first_name from users where email = :email',
            [
                'email' => $email,
            ]
        );
    }
}

