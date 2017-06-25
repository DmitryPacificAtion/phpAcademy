<?php

//Подключаем автокласс
include 'autoloader.php';

//Достаем урл к которому обращаемся
$requestUri = strtolower($_SERVER['REQUEST_URI']); // Пришел сеошник, сказал что урлы капс локом - это плохо
$requestMethod = $_SERVER['REQUEST_METHOD'];

$routes = require __DIR__.'/app/config/routingConfig.php';

//Создаем экземпляр класса Router и вызываем нужный контроллер
$router = new \app\Lib\Router($routes);
list($controllerClass, $action) = $router -> getController($requestUri, $requestMethod);

$controller = new $controllerClass;
if(!method_exists($controller, $action) ){
    throw new \RuntimeException('Неверные настройки роутинга. Проверьте action');
}
// Запускаем контроллер
echo $controller->$action();