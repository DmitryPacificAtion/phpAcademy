<?php
//28. Вывести таблицу умножения с помощью двух циклов for.

for ($i = 1; $i <= 10; ++$i){
    echo '<pre>';
    for ($j = 1; $j <= 10; $j++) {
        echo $i * $j.' ';
    }
    $j = 1;
    echo '<br></pre>';
}

?>