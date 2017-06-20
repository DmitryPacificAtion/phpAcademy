<?php

namespace app\Lib;

use app\Controller\HomeController;

class Router
{
    private $routes = [];

    function  __construct(array $routes)
    {
        $this -> routes = $routes;
    }

    public function getController($requestUri) {
        // Инициализируем
        $controller = null;

        //Пробегаем форычом массив routes,
        // в котором ключ - это регулярное выражение, а значение - класс, экземпляр которого мы создадим.
        foreach ($this -> routes as $regex => $controllerClass) {
            if(preg_match($regex, $requestUri)) {
                $controller = new $controllerClass;
                break; // Нашли - уходим
            }
        }
        // если регулярка не совпала, то показываем главную
        if ($controller === null) {
            $controller = new \app\Controller\HomeController();
        }
        return $controller;
    }
}