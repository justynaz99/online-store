<?php

namespace app\controllers;
use app\forms\ProductForm;
use core\App;
use core\RoleUtils;
use core\SessionUtils;
use core\Utils;
use core\ParamUtils;

class ShoppingCartCtrl {

    private $form;
    private $records;
    private $value;

    public function __construct() {
        $this->form = new ProductForm();
    }

    public function action_addItem() {


        $id_product = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        $id_user = SessionUtils::load("id_user", true);

        try {
            $productFromCart = App::getDB()->select("shopping_cart", [
                "id_product",
            ], [
                "id_product" => $id_product,
                "id_user" => $id_user
            ]);

            $records = App::getDB()->select("product", [
                "id_product",
            ], [
                "id_product" => $id_product
            ]);

            if(!$productFromCart) {
                App::getDB()->insert("shopping_cart", [
                    "id_product" => $records[0]["id_product"],
                    "id_user" => $id_user,
                    "quantity" => 1
                ]);
                Utils::addInfoMessage("Produkt został dodany do koszyka.");

            } else {
                App::getDB()->update("shopping_cart", [
                    "quantity[+]" => 1
                ], [
                    "id_product" => $id_product,
                    "id_user" => $id_user
                ]);
            }


        } catch (\Exception $e) {
            Utils::addErrorMessage('Błąd podczas wstawiania rekrodu do bazy');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }


        App::getRouter()->redirectTo('shoppingCartShow');

    }

    public function action_deleteItem() {

        $id_product = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        $id_user = SessionUtils::load("id_user", true);

        $records = App::getDB()->select("shopping_cart", [
            "quantity",
        ], [
            "id_product" => $id_product,
            "id_user" => $id_user
        ]);

        if($records[0]["quantity"] > 1) {
            App::getDB()->update("shopping_cart", [
                "quantity[-]" => 1
            ], [
                "id_product" => $id_product,
                "id_user" => $id_user
            ]);
        }
        else if ($records[0]["quantity"] == 1) {
            App::getDB()->delete("shopping_cart", ["id_product" => $id_product]);

        }

        Utils::addInfoMessage("Usunięto produkt z koszyka.");
        App::getRouter()->redirectTo('shoppingCartShow');
    }

    public function action_shoppingCartShow() {
        $id_user = SessionUtils::load("id_user", true);
        $this->records = App::getDB()->select("shopping_cart", [
            "[>]product" => "id_product"
        ], [

            "shopping_cart.id_product",
            "product.name",
            "product.price",
            "shopping_cart.quantity"
        ], [
            "id_user" => $id_user,
        ]);

        $this->value = App::getDB()->sum("shopping_cart", [
            "[>]product" => "id_product"
        ], [
            "product.price"
        ]);


        $this->generateView();
    }

    public function isEmpty() {
        $id_user = SessionUtils::load("id_user", true);

        $count = App::getDB()->count("shopping_cart", [
            "id_product"
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
        App::getSmarty()->assign("value", $this->value);
        App::getSmarty()->assign('username', SessionUtils::load('username', true));

        if($this->isEmpty()){
            App::getSmarty()->display('ShoppingCartEmpty.tpl');
        }
        else {
            App::getSmarty()->display('ShoppingCart.tpl');
        }





    }

}