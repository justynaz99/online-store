<?php

namespace app\controllers;
use core\App;
use core\SessionUtils;
use core\Utils;

class HomeCtrl {

    public function action_home() {
//        error_log("Zapisane2: ".SessionUtils::load("id_user", true));
        try {
            App::getSmarty()->assign("products", App::getDB()->select("product", "*"));
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        error_log(SessionUtils::load('username', true));
        App::getSmarty()->assign('username', SessionUtils::load('username', true));
        App::getSmarty()->display("Home.tpl");
    }

}