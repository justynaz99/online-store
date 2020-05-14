<?php

namespace app\controllers;
use app\forms\RegistrationForm;
use core\App;
use core\ParamUtils;
use Medoo\Medoo;
use core\Validator;
use core\Utils;

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
            'required_message' => 'Enter username',
            'min_length' => 2,
            'max_length' => 20,
            'validator_message' => 'Incorrect username format'
        ]);

        $this->form->password = $v->validateFromPost('password', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Enter password',
            'min_length' => 2,
            'max_length' => 20,
            'validator_message' => 'Incorrect password format'
        ]);

        $this->form->first_name = $v->validateFromPost('first_name', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Enter first name',
            'min_length' => 2,
            'max_length' => 20,
            'validator_message' => 'Incorrect first name format'
        ]);

        $this->form->last_name = $v->validateFromPost('last_name', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Enter last name',
            'min_length' => 2,
            'max_length' => 20,
            'validator_message' => 'Incorrect last name format'
        ]);

        $this->form->email = $v->validateFromPost('email', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Enter email',
            'min_length' => 2,
            'max_length' => 20,
            'validator_message' => 'Incorrect email format'
        ]);

        return !App::getMessages()->isError();
    }



    public function action_registrationShow() {
        $this->generateView();
    }

    public function action_registration() {
        if($this->validate()) {
            try {
                if($this->form->id == '') {
                    App::getDB()->insert("user", [
                        "username" => $this->form->username,
                        "password" => $this->form->password,
                        "first_name" => $this->form->first_name,
                        "last_name" => $this->form->last_name,
                        "email" => $this->form->email,
                    ]);
                }
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Insert error');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        } else {
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('Registration.tpl');
    }

}