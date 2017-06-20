<?php

// Роуты и их данные делаем в виде массива
return [
  '/blog/' => \app\Controller\BlogController::class,
    '/admin/' => \app\Controller\AdminController::class,
    '/about-us/' => \app\Controller\AboutUs::class,
];