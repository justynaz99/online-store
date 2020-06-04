<?php

namespace app\controllers;

use core\App;
use core\Messages;
use core\SessionUtils;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->username = ParamUtils::getFromRequest('username'); //czemu nie postem
        $this->form->password = ParamUtils::getFromRequest('password');

        if (!isset($this->form->username))
            return false;

        if (empty($this->form->username)) {
            Utils::addErrorMessage('Wprowadź nazwę użytkownika.');
        }
        if (empty($this->form->password)) {
            Utils::addErrorMessage('Wprowadź hasło.');
        }

        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }

    public function action_login() {

        if($this->validate()) {
            $result = App::getDB()->select("user", "*", [
                "username" => $this->form->username,
                "password" => $this->form->password
            ]);

            if($result) { //czemu result jest true albo false
                RoleUtils::addRole('user');
                SessionUtils::store("id_user", $result[0]['id_user']);
                SessionUtils::store("username", $result[0]['username']);
//                error_log("Zapisane: ". SessionUtils::load("id_user", true));

                Utils::addInfoMessage("Zalogowano użytkownika: ". $this->form->username);
                App::getRouter()->forwardTo('home');
            } else {
                Utils::addErrorMessage('Niepoprawna nazwa użytkownika lub hasło.');
                $this->generateView();
            }
        } else {
            $this->generateView();
        }
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_logout(){
        RoleUtils::removeRole('user');
        SessionUtils::remove('username');
        session_destroy();
        Utils::addInfoMessage("Poprawnie wylogowano użytkownika.");
        App::getRouter()->forwardTo('home');


    }

    public function isLogIn() {
        if(RoleUtils::inRole('user')) {
            Utils::addInfoMessage("Jesteś już zalogowany.");
        }
    }


    public function generateView() {
//        App::getSmarty()->assign('form', $this->form);
        $this->isLogIn();
        App::getSmarty()->assign('username', SessionUtils::load('username', true));
        App::getSmarty()->display('Login.tpl');
    }



}