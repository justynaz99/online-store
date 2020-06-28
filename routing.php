<?php

use core\App;
use core\Utils;
use core\RoleUtils;


App::getRouter()->setDefaultRoute('home');

App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('loginShow', 'LoginCtrl');

Utils::addRoute('registrationShow', 'RegistrationCtrl');
Utils::addRoute('registration', 'RegistrationCtrl');

Utils::addRoute('home', 'HomeCtrl');
Utils::addRoute('searchShow', 'HomeCtrl');

Utils::addRoute('shoppingCartShow', 'ShoppingCartCtrl');
Utils::addRoute('addItem', 'ShoppingCartCtrl');
Utils::addRoute('deleteItem', 'ShoppingCartCtrl');

Utils::addRoute('orderShow', 'OrderCtrl');
Utils::addRoute('order', 'OrderCtrl');

Utils::addRoute('userEdit', 'UserEditCtrl');
Utils::addRoute('userEditSave', 'UserEditCtrl');
Utils::addRoute('deleteUser', 'UserEditCtrl');

Utils::addRoute('deleteFromList', 'ProductEditCtrl');
Utils::addRoute('addToList', 'ProductEditCtrl');
