<?php
//24. Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в
// выбранном вами числе.
// Например: цифра 5 в числе 442158755745 встречается 4 раза.
$myVar = 442158755745;
$s = 3;

if (is_numeric($myVar)){
    $result = 0;
    $myString  = (string)$myVar;
    $myArr = str_split($myString, 1);
    foreach ($myArr as $i) {
        if ($i == $s)
        $result++;

    }
    echo "цифра $s в числе $myVar встречается $result раз";
}
else
    echo 'Введите число';

?>