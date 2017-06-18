<?php

namespace app\Lib;

class Router
{
    public function getController($requestUri) {
        // Routing
        // Проверяем есть ли такой контроллер, если нет отдаем стандартный
        if(preg_match('/blog/i', $requestUri)) {
            // Blog controller
            $controller = new \app\Controller\BlogController();
        }
        else {
            // Home controller
            $controller = new \app\Controller\HomeController();
        }
        return $controller;
    }
}