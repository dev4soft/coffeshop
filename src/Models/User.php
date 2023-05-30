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
            'errcode' => $this->db->errInfo[1],
        ];
    }
}

