<?php
$foo = 'bar';
$bar = 10;

$foo = '{$'+$foo+'}';
echo $foo;
?>