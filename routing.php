<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

//Utils::addRoute('hello', 'HelloCtrl');
//Utils::addRoute('action_name', 'controller_class_name');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('registrationShow', 'RegistrationCtrl');
Utils::addRoute('registration', 'RegistrationCtrl');
Utils::addRoute('home', 'HomeCtrl');
Utils::addRoute('shoppingCartShow', 'ShoppingCartCtrl');
Utils::addRoute('addItem', 'ShoppingCartCtrl');
