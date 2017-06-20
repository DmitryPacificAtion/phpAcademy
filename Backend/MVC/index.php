<?php

//Подключаем автокласс
include 'autoloader.php';

//Достаем урл к которому обращаемся
$requestUri = $_SERVER['REQUEST_URI'];
$routes = require __DIR__.'/app/config/routingConfig.php';

//Создаем экземпляр класса Router и вызываем нужный контроллер
$router = new \app\Lib\Router($routes);
$controller = $router -> getController($requestUri);

// Запускаем контроллер
echo $controller -> indexAction();