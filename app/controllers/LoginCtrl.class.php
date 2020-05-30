<?php

namespace app\controllers;

use core\App;
use core\SessionUtils;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;
    private $result;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->username = ParamUtils::getFromRequest('username');
        $this->form->password = ParamUtils::getFromRequest('password');

        if (!isset($this->form->username))
            return false;

        if (empty($this->form->username)) {
            Utils::addErrorMessage('Enter username');
        }
        if (empty($this->form->password)) {
            Utils::addErrorMessage('Enter password');
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

            if($result) {
                RoleUtils::addRole('user');
                SessionUtils::store("id_user",$result[0]['id_user']);
                error_log("Zapisane: ".SessionUtils::load("id_user", true));
                Utils::addInfoMessage("Zalogowano użytkownika: ".$this->form->username);
                App::getRouter()->redirectTo('Home.tpl');
            } else {
                Utils::addErrorMessage('Incorrect username or password');
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
        session_destroy();
        App::getRouter()->redirectTo('Home.tpl');
    }


    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('Login.tpl');
    }



}