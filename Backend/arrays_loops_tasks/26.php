<?php
//26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
// Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы.
// После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
$arr = array();
$j = 0;
while ($j < 20) {
    $arr[$j] = rand(0, 100);
    $j++;
}

for ($i = 0, $length = count($arr); $i < $length; ) {
    echo $arr[$i].PHP_EOL;
    $i += 2;
}

?>