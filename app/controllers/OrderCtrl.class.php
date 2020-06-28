<?php

namespace app\controllers;

use app\forms\ProductForm;
use core\App;
use core\SessionUtils;
use core\Utils;
use core\ParamUtils;

class OrderCtrl
{

    private $records;
    private $id_order;
    private $orders;

    public function action_order()
    {

        $id_user = SessionUtils::load("id_user", true);

        $records = App::getDB()->select("shopping_cart", [
            "[>]product" => "id_product"
        ], [
            "shopping_cart.id_product",
            "product.name",
            "product.price",
            "shopping_cart.quantity"
        ], [
            "id_user" => $id_user
        ]);

        $value = App::getDB()->sum("shopping_cart", [
            "[>]product" => "id_product"
        ],[
            "product.price"
        ]);

        $status = App::getDB()->select("order_status", "id_status", ["name" => "złożone"]);

        App::getDB()->insert("orders", [
            "date" => date("Y-m-d"),
            "id_user" => $id_user,
            "value" => $value,
            "id_status" => $status[0]["id_status"]
        ], [
            "id_user" => $id_user,
        ]);

        $id_order = App::getDB()->id();

        foreach ($records as $record) {
            App::getDB()->insert("order_position", [
                "id_order" => $id_order,
                "id_product" => $record["id_product"],
                "price_product" => $record["price"],
                "quantity" => $record["quantity"]
            ]);
        }

        App::getDB()->delete("shopping_cart", ["id_user" => $id_user]);

        App::getRouter()->redirectTo('orderShow');
    }

    public function action_orderShow()
    {

        $id_user = SessionUtils::load("id_user", true);

        $ids = App::getDB()->select("orders", "id_order");

        $this->orders = App::getDB()->select("orders", [
            "[>]order_status" => "id_status"
        ], [
            "orders.id_order",
            "orders.date",
            "orders.value",
            "order_status.name"
        ], [
            "ORDER" => [
                "orders.id_order" => "DESC"
            ],
            "orders.id_user" => $id_user
        ]);


        $this->records = App::getDB()->select("order_position", [
            "[>]product" => "id_product",
            "[>]orders" => "id_order"
        ], [
            "order_position.id_order",
            "order_position.id_product",
            "product.name",
            "order_position.price_product",
            "order_position.quantity"
        ], [
//            "order_position.id_order" => $this->orders[0]["id_order"]
            "orders.id_user" => $id_user

        ]);


        $this->generateView();
    }

    public function isEmpty()
    {
        $id_user = SessionUtils::load("id_user", true);

        $count = App::getDB()->count("orders", [
            "id_order"
        ], [
            "id_user" => $id_user
        ]);

        if ($count == 0)
            return true;
        else
            return false;
    }

    public function generateView()
    {
        App::getSmarty()->assign("list", $this->records);
        App::getSmarty()->assign("orders", $this->orders);
        App::getSmarty()->assign("id", $this->id_order);
        App::getSmarty()->assign('username', SessionUtils::load('username', true));

        if ($this->isEmpty()) {
            App::getSmarty()->display('OrderEmpty.tpl');
        } else {
            App::getSmarty()->display('Order.tpl');
        }

    }
}