<?php
//23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
// Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
// По желанию можете сделать проверку на корректность введения данных пользователем.
$myVar = 123;

if (is_numeric($myVar)){
    $result = 0;
    $myString  = (string)$myVar;
    $myArr = str_split($myString, 1);
    foreach ($myArr as $i) {
        $result += $i;
    }
    echo $result;
}
else
    echo 'Введите число';
?>


