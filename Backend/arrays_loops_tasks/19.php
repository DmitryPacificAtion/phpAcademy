<?php
//19. Составьте массив дней недели.
// С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
// Текущий день должен храниться в переменной $day.
$week = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
$day = date('N');
//echo 'PHP думает, что сегодня '.$day.' день недели =)<br>';
foreach ($week as $d) {
    if ($d == $week[$day-1]) // Дата от 1 (понедельник) до 7 (воскресенье), а в массиве отсчет начинается с 0, по этому $day-1.
        echo '<i>'.$d.'</i> ';
    else
        echo $d.' ';
}
/* Странности ....
На часах еще пятница, но php думает что уже суббота.
http://prnt.sc/eifj50

JS в этом плане более адекватен. У него отсчет идет с 0 (воскресенье) и до 6 (суббота)
http://prntscr.com/eifldh

P.S. Сохраню себе на память ссылки, которые приводил Костя в slack:
http://stackoverflow.com/questions/10450644/how-do-you-explain-the-result-for-a-new-datetime0000-00-00-000000
https://habrahabr.ru/post/146109/
http://www.phpinternalsbook.com/zvals/basic_structure.html
https://en.wikipedia.org/wiki/C_data_types#Fixed-width_integer_types
*/
?>