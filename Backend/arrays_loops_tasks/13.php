<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Задачи по массивам и циклам</title></head><body><table border="1px" style="padding:px"><tbody>
<?php
//13. Вывести таблицу умножения

for ($i = 1, $j = 1; $i <= 10; ++$i){
    echo '<tr>';
    while ($j <= 10) {
        echo '<td style=\'padding:10px\';>',$i * $j.'</td>';
        $j++;
    }
    $j = 1;
     echo '</tr>';
}
?>
</tbody></table></body></html>
