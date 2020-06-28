<?php

namespace app\controllers;
use app\forms\RegistrationForm;
use core\App;
use core\ParamUtils;
use Medoo\Medoo;
use core\Validator;
use core\Utils;
use core\SessionUtils;

class RegistrationCtrl {

    private $form;

    public function __construct() {
        $this->form = new RegistrationForm();
    }


    public function validate() {

        $this->form->id = ParamUtils::getFromPost('id', true, 'Error');

        $v = new Validator();

        $this->form->username = $v->validateFromPost('username', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź nazwę użytkownika.',
            'min_length' => 5,
            'max_length' => 20,
            'validator_message' => 'Nazwa użytkownika powinna zawierać od 5 do 20 znaków.'
        ]);

        $this->form->password = $v->validateFromPost('password', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź hasło.',
            'min_length' => 5,
            'max_length' => 20,
            'validator_message' => 'Hasło powinno zawierać od 5 do 30 znaków.'
        ]);

        $this->form->first_name = $v->validateFromPost('first_name', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź imię.',
            'min_length' => 3,
            'max_length' => 20,
            'validator_message' => 'Hasło powinno zawierać od 3 do 30 znaków.'
        ]);

        $this->form->last_name = $v->validateFromPost('last_name', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź nazwisko.',
            'min_length' => 2,
            'max_length' => 20,
            'validator_message' => 'Nazwisko powinno zawierać od 3 do 30 znaków.'
        ]);

        $this->form->email = $v->validateFromPost('email', [
            'trim' => true,
            'required' => true,
            'email' => true,
            'required_message' => 'Wprowadź adres email.',
            'min_length' => 3,
            'max_length' => 40,
            'validator_message' => 'Wprowadź poprawny adres email.'
        ]);

        return !App::getMessages()->isError();
    }

    public function action_registrationShow() {
        $this->generateView();
    }

    public function action_registration() {

        if($this->validate()) {
            try {
                App::getDB()->insert("user", [
                    "username" => $this->form->username,
                    "password" => $this->form->password,
                    "first_name" => $this->form->first_name,
                    "last_name" => $this->form->last_name,
                    "email" => $this->form->email,
                    "role" => "user",
                    "date_added" => date("Y-m-d"),
                ]);

                $id = App::getDB()->id();

                App::getDB()->update("user", ["who_added" => $id], ["id_user" => $id]);

                App::getRouter()->redirectTo('loginShow');
                Utils::addInfoMessage("Zarejestrowano użytkownika: " . $this->form->username);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd podczas wprowadzania rekrodu do bazy.');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        } else {
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('username', SessionUtils::load('username', true));
        App::getSmarty()->display('Registration.tpl');
    }

}