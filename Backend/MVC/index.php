<?php

//Подключаем автокласс
include 'autoloader.php';

//Достаем урл к которому обращаемся
 $requestUri = $_SERVER['REQUEST_URI'];

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

 // Запускаем контроллер
echo $controller->indexAction();