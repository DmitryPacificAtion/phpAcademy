<?php

//Подключаем автокласс
include 'autoloader.php';

//Достаем урл к которому обращаемся
$requestUri = strtolower($_SERVER['REQUEST_URI']); // Пришел сеошник, сказал что урлы капс локом - это плохо
$routes = require __DIR__.'/app/config/routingConfig.php';

//Создаем экземпляр класса Router и вызываем нужный контроллер
$router = new \app\Lib\Router($routes);
$controller = $router -> getController($requestUri);

// Запускаем контроллер
echo $controller -> indexAction();