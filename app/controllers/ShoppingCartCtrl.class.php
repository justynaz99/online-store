<?php

namespace app\controllers;
use app\forms\ProductForm;
use core\App;
use core\Utils;

class ShoppingCartCtrl {

    private $form;
    private $records;

    public function __construct() {
        $this->form = new ProductForm();
    }

    public function action_addItem() {
        try {
            $this->records = App::getDB()->select("product", [
                "id_product",
                "name",
                "price",
            ], [
                "id_product" => 1
            ]);

            foreach ($this->records as $record) {
                $this->form->id = $record["id_product"];
                $this->form->name = $record["name"];
                $this->form->price = $record["price"];
            }


            App::getDB()->insert("shopping_cart", [
                "id_product" => $this->form->id,
                "name_product" => $this->form->name,
                "price_product" => $this->form->price
            ]);

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Insert error');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        $this->generateView();





    }

    public function action_shoppingCartShow() {
        $this->generateView();
    }

    public function generateView() {
        App::getSmarty()->assign("list", $this->records);
        App::getSmarty()->display('ShoppingCart.tpl');
    }

}