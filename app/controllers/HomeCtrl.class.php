<?php

namespace app\controllers;
use app\forms\ProductForm;
use core\App;
use core\SessionUtils;
use core\Utils;
use core\ParamUtils;

class HomeCtrl {

    public function action_home() {
        try {
            App::getSmarty()->assign("products", App::getDB()->select("product", "*"));
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('username', SessionUtils::load('username', true));
        App::getSmarty()->display("Home.tpl");

    }

    public function action_homeUser() {
            try {
                App::getSmarty()->assign("products", App::getDB()->select("product", "*"));
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            App::getSmarty()->assign('username', SessionUtils::load('username', true));
            App::getSmarty()->display("HomeUser.tpl");

    }

    public function action_homeAdmin() {
        try {
            App::getSmarty()->assign("products", App::getDB()->select("product", "*"));
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('username', SessionUtils::load('username', true));
        App::getSmarty()->display("HomeAdmin.tpl");

    }

    public function action_deleteFromList() {

        $id_product = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');

        $product = App::getDB()->select("product", [
            "id_product",
        ], [
            "id_product" => $id_product
        ]);

        if($product) {
            App::getDB()->delete("product", ["id_product" => $id_product]);
        }
        Utils::addInfoMessage("Usunięto produkt z listy.");
        App::getRouter()->forwardTo('homeAdmin');
    }

    private $form;

    public function __construct() {
        $this->form = new ProductForm();
    }

    public function action_addToList() {

        $this->form->name = ParamUtils::getFromPost('name_product', true, 'Error');
        $this->form->price = ParamUtils::getFromPost('price_product', true, 'Error');

        try {
            App::getDB()->insert("product", [
                "name" => $this->form->name,
                "price" => $this->form->price
            ]);
            Utils::addInfoMessage("Dodano produkt do listy.");
            App::getRouter()->redirectTo('homeAdmin');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd podczas wprowadzania rekrodu do bazy.');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

}