<?php

namespace CoffeShop\Models;

class Order
{
    private $db;


    public function __construct($db)
    {
        $this->db = $db;
    }


    public function listOrders($user_id)
    {
        $this->db->updateData('set lc_time_names="ru_RU"');

        return $this->db->getList('
            select
                order_id,
                date_format(dt_tm, "%d %M %Y, %H:%i") as dt,
                sum(quantity * cost) as summa
            from
                orders
                join product_orders using (order_id)
            where
                user_id = :user_id
            group by
                order_id
            order by
                dt_tm desc
            limit 5
            ',
            [ 'user_id' => $user_id]
        );
    }


    public function orderItems($user_id, $order_id)
    {
        return $this->db->getList('
            select
                title_name, trait_name, quantity, product_orders.cost as cost
            from
                product_orders
                join orders using (order_id)
                join product using (product_id)
                join title using (title_id)
                join trait using (trait_id)
            where
                order_id = :order_id
                and
                user_id = :user_id
            order by
                title_name
            ',
            [
                'user_id' => $user_id,
                'order_id' => $order_id,
            ]
        );
    }
}

