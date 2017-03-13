<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Задачи по массивам и циклам</title></head><body><table border="1px" style="padding:px"><tbody>

<?php
//27. Создать генератор случайных таблиц.
// Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
// Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
// Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
// в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
// В каждой ячейке должно находиться случайное число.

$arr = [0];

$row = 10;
$cols = 12;
$colors = array('red','yellow','blue','gray','maroon','brown','green');

function getColor ($colors) {
    $arrayLength = count($colors);
    return "background-color: ".$colors[rand(0, $arrayLength)].";";
}

function printTable($row, $cols, $colors) {
    while ($row > 0) {
        echo '<tr>';
        $cells = $cols;
        while ($cells > 0) { ?>

            <td style='padding:10px; <?=getColor($colors);?>'><?=getValue();?></td>

            <?php --$cells;
        }
        echo '</tr>';
        --$row;
    }
}

function getValue () {
    return rand(0, 1000);
}

printTable($row, $cols, $colors);
?>

</tbody></table></body></html>
