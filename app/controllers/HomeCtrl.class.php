<?php

namespace app\controllers;
use core\App;
use core\SessionUtils;

class HomeCtrl {
    public function action_home() {
        error_log("Zapisane2: ".SessionUtils::load("id_user", true));
        try {
            App::getSmarty()->assign("products", App::getDB()->select("product", "*"));
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        App::getSmarty()->display("Home.tpl");
    }

}