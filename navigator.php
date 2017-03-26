<?php

$folder= '';
if (isset($_GET['folder'])) {
    $folder = trim(strip_tags($_GET['folder']));
}
$path = __DIR__.DIRECTORY_SEPARATOR.'folder'.DIRECTORY_SEPARATOR;

foreach ($files as $file) {
    if (is_dir($path.DIRECTORY_SEPARATOR.$file)) {
        echo "<p>{$file}[file]";
        // ... //

    }
}

if (!isset($_GET['file']))
    die('No file has been found');
$filename = trim(strip_tags($_GET['file']));
$fileContent = file_get_contents($path);
$path = __DIR__.DIRECTORY_SEPARATOR.'folder';

if(!is_file($path)) {
    die(sprintf('This file %s not found', $path));
}
 ?>