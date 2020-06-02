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

//        if(!RoleUtils::inRole('user')){
////            echo "You have to sign in";
////        }

        try {
            $records = App::getDB()->select("product", [
                "id_product",
                "name",
                "price",
            ], [
                "id_product" => $id_product
            ]);

            $id_user = SessionUtils::load("id_user", true);

//            error_log("id_product: " . $this->records[0]["id_product"]);
            
            App::getDB()->insert("shopping_cart", [
                "id_product" => $records[0]["id_product"],
                "name_product" => $records[0]["name"],
                "price_product" => $records[0]["price"],
                "id_user" => $id_user
            ]);

        } catch (\Exception $e) {
            error_log($e->getMessage());
            Utils::addErrorMessage('Insert error');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getRouter()->redirectTo('shoppingCartShow');

    }

    public function action_shoppingCartShow() {
        $id_user = SessionUtils::load("id_user", true);
        $this->records = App::getDB()->select("shopping_cart", [
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
        App::getSmarty()->display('ShoppingCart.tpl');
    }

}