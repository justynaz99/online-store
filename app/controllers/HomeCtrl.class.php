<?php

namespace app\controllers;

    use app\forms\ProductForm;
    use core\App;
    use core\SessionUtils;
    use core\Utils;
    use core\ParamUtils;

class HomeCtrl
{

    private $records;

    public function __construct()
    {
        $this->form = new ProductForm();
    }

    public function loadProducts()
    {

        try {
            App::getSmarty()->assign("products", App::getDB()->select("product", "*"));
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }



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
        App::getRouter()->redirectTo('homeSeller');
    }


    public function action_addToList()
    {

        $this->form->name = ParamUtils::getFromPost('name_product', true, 'Error');
        $this->form->price = ParamUtils::getFromPost('price_product', true, 'Error');

        try {
            App::getDB()->insert("product", [
                "name" => $this->form->name,
                "price" => $this->form->price
            ]);
            Utils::addInfoMessage("Dodano produkt do listy.");
            App::getRouter()->redirectTo('homeSeller');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd podczas wprowadzania rekrodu do bazy.');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public function action_deleteUser()
    {

        $id_user = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');

        $user = App::getDB()->select("user", [
            "id_user",
        ], [
            "id_user" => $id_user
        ]);

        if ($user) {
            App::getDB()->delete("user", ["id_user" => $id_user]);
        }
        Utils::addInfoMessage("Usunięto użytkownika.");
        App::getRouter()->redirectTo('homeAdmin');
    }

    public function validate()
    {

        $this->form->name = ParamUtils::getFromRequest('name');

        return !App::getMessages()->isError();
    }

    public function search()
    {

        $this->validate();

        $search_params = [];
        if (isset($this->form->name) && strlen($this->form->name) > 0) {
            $search_params['name[~]'] = $this->form->name . '%';
        }


        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }

        $where ["ORDER"] = "name";

        try {
            $this->records = App::getDB()->select("product", [
                "id_product",
                "name",
                "price",
            ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

    }

    public function action_home()
    {

        $this->loadProducts();

        $this->search();

        App::getSmarty()->assign('username', SessionUtils::load('username', true));
        App::getSmarty()->assign('productForm', $this->form);
        App::getSmarty()->assign('products', $this->records);
        App::getSmarty()->display("Home.tpl");

    }

    public function action_homeUser()
    {

        $this->loadProducts();

        $this->search();

        App::getSmarty()->assign('username', SessionUtils::load('username', true));
        App::getSmarty()->assign('productForm', $this->form);
        App::getSmarty()->assign('products', $this->records);
        App::getSmarty()->display("HomeUser.tpl");

    }

    public function action_homeSeller()
    {

        $this->loadProducts();

        $this->search();

        App::getSmarty()->assign('username', SessionUtils::load('username', true));
        App::getSmarty()->assign('productForm', $this->form);
        App::getSmarty()->assign('products', $this->records);
        App::getSmarty()->display("HomeSeller.tpl");

    }

    public function action_homeAdmin()
    {

        try {
            App::getSmarty()->assign("users", App::getDB()->select("user", "*"));
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('username', SessionUtils::load('username', true));
        App::getSmarty()->display("HomeAdmin.tpl");

    }



}