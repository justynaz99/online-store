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
                "name",
                "price",
            ], [
                "id_product" => $id_product
            ]);



            if(!$productFromCart) {
                App::getDB()->insert("shopping_cart", [
                    "id_product" => $records[0]["id_product"],
                    "name_product" => $records[0]["name"],
                    "price_product" => $records[0]["price"],
                    "id_user" => $id_user
                ]);

            } else {
                Utils::addInfoMessage("Produkt znajduje się już w koszyku.");
            }

        } catch (\Exception $e) {
            Utils::addErrorMessage('Błąd podczas wstawiania rekrodu do bazy');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getRouter()->forwardTo('shoppingCartShow');
    }

    public function action_deleteItem() {

        $id_product = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');

        $productFromCart = App::getDB()->select("shopping_cart", [
            "id_product",
        ], [
            "id_product" => $id_product
        ]);

        if($productFromCart) {
            App::getDB()->delete("shopping_cart", ["id_product" => $id_product]);
        }
        Utils::addInfoMessage("Usunięto produkt z koszyka.");
        App::getRouter()->forwardTo('shoppingCartShow');
    }

    public function action_shoppingCartShow() {
        $id_user = SessionUtils::load("id_user", true);
        $this->records = App::getDB()->select("shopping_cart", [
            "id_product",
            "name_product",
            "price_product",
        ], [
            "id_user" => $id_user
        ]);
        $this->generateView();
    }

    public function generateView() {
        App::getSmarty()->assign("list", $this->records);
        App::getSmarty()->assign('username', SessionUtils::load('username', true));
        if(RoleUtils::inRole('user')) {
            App::getSmarty()->display('ShoppingCart.tpl');
        }
        else if(RoleUtils::inRole('admin')) {
            App::getSmarty()->display('ShoppingCartAdmin.tpl');
        }

    }

}