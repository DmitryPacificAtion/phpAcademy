<?php
/**
 * 19. Выведите результат сравнения $a и $b из п.17 с помощью var_dump.
 *
 */

$a = '78';
$b = 78;

if ($a == $b)
    echo 'Значения пермеменных $a и $b равны<br><br>';
else
    echo 'Пермеменные $a и $b не равны<br><br>';
var_dump($a);
echo '<br>';
var_dump($b);
?>