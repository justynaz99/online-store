<?php

namespace app\controllers;
use core\App;

class HomeCtrl {
    public function action_home() {
        App::getSmarty()->display("Home.tpl");
    }

}