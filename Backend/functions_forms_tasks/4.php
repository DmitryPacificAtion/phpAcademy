<?php
//4. Написать функцию, которая выводит список файлов в заданной директории.
// Директория задается как параметр функции.

$path = dir('./');
function getFiles($path) {
    while ($entry = $path->read()) {
        echo "<a href='$entry'>$entry</a><br>";
    }
    $path->close();
}
getFiles($path);
?>