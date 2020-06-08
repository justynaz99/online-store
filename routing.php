<?php

use core\App;
use core\Utils;
use core\RoleUtils;

if (RoleUtils::inRole("user")) {
    App::getRouter()->setDefaultRoute('homeUser');
}
else if (RoleUtils::inRole("admin")) {
    App::getRouter()->setDefaultRoute('homeAdmin');
}
else {
    App::getRouter()->setDefaultRoute('home');
}

App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('registrationShow', 'RegistrationCtrl');
Utils::addRoute('registration', 'RegistrationCtrl');
Utils::addRoute('home', 'HomeCtrl');
Utils::addRoute('homeUser', 'HomeCtrl' );
Utils::addRoute('homeAdmin', 'HomeCtrl' );
Utils::addRoute('shoppingCartShow', 'ShoppingCartCtrl');
Utils::addRoute('addItem', 'ShoppingCartCtrl');
Utils::addRoute('deleteItem', 'ShoppingCartCtrl');
Utils::addRoute('deleteFromList', 'HomeCtrl');
Utils::addRoute('addToList', 'HomeCtrl');
