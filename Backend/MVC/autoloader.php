<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 17.06.2017
 * Time: 0:15
 */

spl_autoload_register(function ($class) {
    // Меняем слэши в другую сторону
    // \\Some\\NmaSpace --> Some/NameSpace.php
    $path = preg_replace('/\\\/', '/', $class);
    require $path.'.php';
});
