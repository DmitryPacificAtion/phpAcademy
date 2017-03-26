<?php
//3. Есть текстовый файл.
// Необходимо удалить из него все слова, длина которых превыщает N символов.
// Значение N задавать через форму.
// Проверить работу на кириллических строках - найти ошибку, найти решение.

$n = 3;

function removeBigWords($size, $filePath) {
$content = file_get_contents($filePath);

$words = explode(PHP_EOL, $content);

foreach ($words as $key => $word) {
    if(mb_strlen($word) > $size) {
        unset($words[$key]);
    }
}
return $words;
}
$result = removeBigWords(3, __DIR__.'/3.php.test.txt');

var_dump($result);
?>