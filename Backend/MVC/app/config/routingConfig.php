<?php

// Роуты и их данные делаем в виде массива
return [
    '/blog/i' => \app\Controller\BlogController::class,
    '/admin/i' => \app\Controller\AdminController::class,
    '/about\\-us/i' => \app\Controller\AboutUsController::class,
];