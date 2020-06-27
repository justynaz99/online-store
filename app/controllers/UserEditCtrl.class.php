<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\UserEditForm;

class UserEditCtrl {

    private $form;

    public function __construct() {
        $this->form = new UserEditForm();
    }

    public function validateEdit() {

        $this->form->id_user = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_userEdit() {

        if ($this->validateEdit()) {
            try {

                $record = App::getDB()->get("user", "*", [
                    "id_user" => $this->form->id_user
                ]);

                $this->form->id_user = $record['id_user'];
                $this->form->username = $record['username'];
                $this->form->password = $record['password'];
                $this->form->first_name = $record['first_name'];
                $this->form->last_name = $record['last_name'];
                $this->form->email = $record['email'];
                $this->form->role = $record['role'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        error_log("Pobranie rekordów do formularza");

        $this->generateView();
    }

    public function validateSave() {

        $this->form->id_user = ParamUtils::getFromPost('id_user', true, 'Error');

        $v = new Validator();

        $this->form->username = $v->validateFromPost('username', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź nazwę użytkownika.',
            'min_length' => 3,
            'max_length' => 20,
            'validator_message' => 'Nazwa użytkownika powinna mieć od 3 do 20 znaków.'
        ]);

        $this->form->password = $v->validateFromPost('password', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź hasło.',
            'min_length' => 3,
            'max_length' => 20,
            'validator_message' => 'Hasło powinno mieć od 3 do 30 znaków.'
        ]);

        $this->form->first_name = $v->validateFromPost('first_name', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź imię.',
            'min_length' => 3,
            'max_length' => 20,
            'validator_message' => 'Hasło powinno mieć od 3 do 30 znaków.'
        ]);

        $this->form->last_name = $v->validateFromPost('last_name', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź nazwisko.',
            'min_length' => 2,
            'max_length' => 20,
            'validator_message' => 'Nazwisko powinno mieć od 3 do 30 znaków.'
        ]);

        $this->form->email = $v->validateFromPost('email', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź adres email.',
            'min_length' => 3,
            'max_length' => 20,
            'validator_message' => 'Adres email powinien mieć od 3 do 30 znaków.'
        ]);

        $this->form->role = $v->validateFromPost('role', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź rolę.',
            'min_length' => 3,
            'max_length' => 20,
            'validator_message' => 'Rola powinna mieć od 3 do 30 znaków.'
        ]);

        return !App::getMessages()->isError();
    }

    public function action_userEditSave() {

        if($this->validateSave()) {
            try {
                App::getDB()->update("user", [
                    "username" => $this->form->username,
                    "password" => $this->form->password,
                    "first_name" => $this->form->first_name,
                    "last_name" => $this->form->last_name,
                    "email" => $this->form->email,
                    "role" => $this->form->role,
                    "date_added" => date("Y-m-d"),
                    "who_added" => $this->form->id_user
                ], [
                    "id_user" => $this->form->id_user
                ]);
                error_log("zapisano");
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            App::getRouter()->forwardTo('homeAdmin');
        } else {
            $this->generateView();
        }




    }



    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('UserEdit.tpl');
    }

}
