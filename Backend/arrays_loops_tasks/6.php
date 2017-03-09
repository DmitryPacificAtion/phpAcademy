<?php
//6. Дан массив $arr.
// С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = [];
$ru = [];

foreach($arr as $k => $v) {
    array_push($en, $k);
    array_push($ru, $v);
}

foreach ($en as $i) {
    echo $i.'<br>';
}
echo '<br>';
foreach ($ru as $k) {
    echo $k.'<br>';
}

?>