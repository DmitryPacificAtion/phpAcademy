<?php
//13. Вывести таблицу умножения

for ($i = 1, $j = 1; $i <= 10; ++$i){
    echo '<pre>';
    while ($j <= 10) {
        echo $i * $j.' ';
        $j++;
    }
    $j = 1;
    echo '<br></pre>';
}
?>