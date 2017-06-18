<?php

//Подключаем автокласс
include 'autoloader.php';

//Достаем урл к которому обращаемся
$requestUri = $_SERVER['REQUEST_URI'];


$router = new \app\Lib\Router();
$controller = $router->getController($requestUri);

// Запускаем контроллер
echo $controller->indexAction();