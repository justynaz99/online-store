<?php

namespace app\controllers;
use app\forms\ProductForm;
use core\App;
use core\SessionUtils;
use core\Utils;
use core\ParamUtils;

class OrderCtrl {

    private $records;
    private $id_order;
    private $orders;

    public function action_order() {

        $id_user = SessionUtils::load("id_user", true);

        $records = App::getDB()->select("shopping_cart", [
            "[>]product" => "id_product"
        ], [
            "shopping_cart.id_product",
            "product.name",
            "shopping_cart.price_product",
            "shopping_cart.quantity"
        ], [
            "id_user" => $id_user
        ]);

        $value = App::getDB()->sum("shopping_cart", "price_product");

        App::getDB()->insert("user_order", [
            "date" => date("Y-m-d"),
            "id_user" => $id_user,
            "value" => $value
        ], [
            "id_user" => $id_user,
        ]);

        $this->id_order = App::getDB()->id();

        foreach ($records as $record){
            App::getDB()->insert("order_position", [
                "id_order" => $this->id_order,
                "id_product" => $record["id_product"],
                "price_product" => $record["price_product"],
                "quantity" => $record["quantity"]
            ]);
        }

        App::getDB()->delete("shopping_cart", ["id_user" => $id_user]);

        App::getRouter()->redirectTo('orderShow');
    }

    public function action_orderShow() {

        $id_user = SessionUtils::load("id_user", true);

        $this->orders = App::getDB()->select("user_order", [
            "id_order",
            "date",
            "value"
        ], [
            "ORDER" => [
                "id_order" => "DESC"
            ],
            "id_user" => $id_user
        ]);

        $this->records = App::getDB()->select("order_position", [
            "[>]product" => "id_product",
            "[>]user_order" => "id_order"
        ], [

            "order_position.id_product",
            "product.name",
            "order_position.price_product",
            "order_position.quantity"
        ], [
            "order_position.id_order" => $this->orders[0]["id_order"]
        ]);

        $this->generateView();
    }

    public function isEmpty() {
        $id_user = SessionUtils::load("id_user", true);

        $count = App::getDB()->count("user_order", [
            "id_order"
        ], [
            "id_user" => $id_user
        ]);

        if($count == 0)
            return true;
        else
            return false;
    }

    public function generateView() {
        App::getSmarty()->assign("list", $this->records);
        App::getSmarty()->assign("orders", $this->orders);
        App::getSmarty()->assign("id", $this->id_order);
        App::getSmarty()->assign('username', SessionUtils::load('username', true));

        if($this->isEmpty()){
            App::getSmarty()->display('OrderEmpty.tpl');
        }
        else {
            App::getSmarty()->display('Order.tpl');
        }

    }
}