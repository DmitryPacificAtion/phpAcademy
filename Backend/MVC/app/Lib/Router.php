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

    public function getController($requestUri, $requestMethod) {
        // Инициализируем
        $controllerClassAndAction = null;
        //Пробегаем форычом массив routes,
        // в котором ключ - это регулярное выражение, а значение - класс, экземпляр которого мы создадим.
        foreach ($this -> routes as $route) {
            $regex = $route['path'];
            $controllerClass = $route['controller'];
            $method = $route['method'];
            $action = isset($route['action'])
                ? $route['action'].'Action'
                : 'indexAction';
            if($this->matchRoute($requestMethod, $requestUri, $route)) {
                $controllerClassAndAction = [
                    $controllerClass,
                    $action
                ];

                break; // Нашли - уходим
            }
        }
        // если регулярка не совпала, то показываем 404
        if ( empty($controllerClassAndAction)) {
            $controllerClassAndAction = [
                $this ->routes['default']['controller'], 'indexAction',
            ];
            //TODO: релизовать главную и 404
//            $controller = new \app\Controller\HomeController();
//            $controllerClass = $this->routes['Not Found']['controller'];
//            $controller = new \app\Controller\NotFoundController();
        }
        return $controllerClassAndAction;
    }
    public function matchRoute ($requestMethod, $requestUri, array $route) {

        return $route['method'] === $requestMethod && preg_match($route['path'], $requestUri);
    }
}