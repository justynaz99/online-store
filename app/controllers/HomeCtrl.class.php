<?php

namespace app\controllers;
use core\App;
use core\SessionUtils;
use core\Utils;

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

}