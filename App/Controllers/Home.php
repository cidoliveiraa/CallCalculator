<?php

namespace Controller;
class Home{
    public static function Index(){
        $view = new \Controller\View();
        $view->montaView("Home/index");
    }
}
