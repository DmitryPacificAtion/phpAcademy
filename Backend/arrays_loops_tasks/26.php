<?php
//26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
// Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы.
// После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
$arr = array();
$j = 0;
while ($j < 20) {
    $arr[$j] = rand(1, 100);
    $j++;
}

echo 'Произведение элементов с не парным индексом, котрые больше ноля:'.'<br>';
$result = 1;
for ($i = 0, $length = count($arr); $i < $length; ) {
    if ($arr[$i] > 0)
        $result *= $arr[$i];
    $i += 2;
}
echo $result.'<br>';

echo 'Элементы больше ноля и с не парным индексом:'.'<br>';
for ($i = 0, $length = count($arr); $i < $length; ) {
    echo $arr[$i].PHP_EOL;
    $i += 2;
}

?>