<?php

namespace app\controllers;

use app\forms\LoginForm;
use app\forms\ProductForm;
use core\App;
use core\RoleUtils;
use core\SessionUtils;
use core\Utils;
use core\ParamUtils;

class HomeCtrl
{

    private $form;
    private $records;
    private $page;
    private $lastPage;
    private $products;

    public function __construct()
    {
        $this->form = new ProductForm();
    }

    public function action_home()
    {
        $this->loadProducts();
        $this->loadUsers();

        App::getSmarty()->assign('username', SessionUtils::load('username', true));
        App::getSmarty()->assign('productForm', $this->form);
        App::getSmarty()->assign('products', $this->products);
        App::getSmarty()->assign('page', $this->page);
        App::getSmarty()->assign('lastPage', $this->lastPage);

        if (RoleUtils::inRole("user")) {
            App::getSmarty()->display("HomeUser.tpl");
        } else if (RoleUtils::inRole("seller")) {
            App::getSmarty()->display("HomeSeller.tpl");
        } else if (RoleUtils::inRole("admin")) {
            App::getSmarty()->display("HomeAdmin.tpl");
        } else {
            App::getSmarty()->display("Home.tpl");
        }
    }

    public function loadProducts()
    {
        $this->page = ParamUtils::getFromCleanURL(1, false, "Błędne wywołanie aplikacji");

        $quantity = 4;

        (int) $count = App::getDB()->count("product", []);
        $this->lastPage = ceil($count / $quantity);
        if ($this->page == null || $this->page > $this->lastPage || $this->page < 1)
            $this->page = 1;

        try {
            $option = isset($_POST['option']) ? $_POST['option'] : false;
            if ($option) {
                switch ($_POST['option']) {
                    case 1 :
                        $this->products = App::getDB()->select("product", "*", [
                            'LIMIT' => [$this->page * $quantity - $quantity, $quantity],
                            'ORDER' => ['price' => 'ASC']
                        ]);
                        break;
                    case 2 :
                        $this->products = App::getDB()->select("product", "*", [
                            'LIMIT' => [$this->page * $quantity - $quantity, $quantity],
                            'ORDER' => ['name' => 'ASC']
                        ]);
                        break;
                }
            } else {
                error_log($this->page);
                $this->products = App::getDB()->select("product", "*", [
                            'LIMIT' => [$this->page * $quantity - $quantity, $quantity],

                ]);
            }

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public function loadUsers()
    {
        try {
            App::getSmarty()->assign("users", App::getDB()->select("user", "*"));
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
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

    public function action_searchShow()
    {
        $this->search();

        App::getSmarty()->assign('username', SessionUtils::load('username', true));
        App::getSmarty()->assign('productForm', $this->form);
        App::getSmarty()->assign('products', $this->records);

        if (RoleUtils::inRole("user")) {
            App::getSmarty()->display("HomeSearchUser.tpl");
        } else {
            App::getSmarty()->display("HomeSearch.tpl");
        }

    }











}