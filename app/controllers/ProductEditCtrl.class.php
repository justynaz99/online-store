<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;

class ProductEditCtrl
{

    public function action_deleteFromList()
    {
        $id_product = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');

        $product = App::getDB()->select("product", [
            "id_product",
        ], [
            "id_product" => $id_product
        ]);

        if ($product) {
            App::getDB()->delete("product", ["id_product" => $id_product]);
        }
        Utils::addInfoMessage("Usunięto produkt z listy.");
        App::getRouter()->redirectTo('home');
    }


    public function action_addToList()
    {
        $name = ParamUtils::getFromPost('name_product', true, 'Error');
        $price = ParamUtils::getFromPost('price_product', true, 'Error');

        try {
            App::getDB()->insert("product", [
                "name" => $name,
                "price" => $price
            ]);
            Utils::addInfoMessage("Dodano produkt do listy.");
            App::getRouter()->redirectTo('home');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd podczas wprowadzania rekrodu do bazy.');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

}