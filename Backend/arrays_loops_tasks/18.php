<?php
//18. Составьте массив дней недели.
// С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.

$week = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

foreach ($week as $d) {
    if ($d == $week[5] || $d == $week[6])
        echo '<strong>'.$d.'</strong> ';
    else
        echo $d.' ';
}
?>