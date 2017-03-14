<?php
//25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
// найти максимальное и минимальное значение и поменять их местами.

$arr = array();

$j = 0;
while ($j < 20) {
	$arr[$j] = rand(0, 1000);
	$j++;
}

function printArr($arr) {
	foreach ($arr as $k) {
		echo $k.'<br>';
	}
}

$max = -INF; // Максимальное число = отрицательная бесконечность
$min =  INF; // Минимотное число = положительная бесконечность
$minIndx = null;
$maxIndx = null;

printArr($arr);

foreach ($arr as $k => $v) {
	if ($v > $max) {
		$max = $v;
		$maxIndx = $k;
	}
	if ($v < $min) {
		$min = $v;
		$minIndx = $k;
	}
}

$arr[$minIndx] = $max." - MAX [$minIndx]";
$arr[$maxIndx] = $min." - MIN [$maxIndx]";

echo '<br>Поменяли местами min и max:<br><br>';
echo "Было: min: $min [$minIndx], max: $max [$maxIndx]<br>Стало:<br><br>";

printArr($arr);

?>