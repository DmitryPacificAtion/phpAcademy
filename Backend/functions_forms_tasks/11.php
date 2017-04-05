<?php
//11. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом,
// что каждое новое предложение начиняется с большой буквы.
//Пример:
//Входная строка:
// 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый.
// а ларчик просто открывался.а там хоть трава не расти.';
//Строка, возвращенная функцией : 'А Васька слушает да ест. А воз и ныне там.
// А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый.
// А ларчик просто открывался.А там хоть трава не расти.';

$sentences = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.';
echo $sentences.'<br>';
$arrSentences = explode('. ',$sentences);
$modifiedSentences = [];
foreach ($arrSentences as $sentence) {
    $length = strlen($sentence);
    if ( $sentence[$length-1] != '.')
        $sentence = $sentence.'. ';
    $sentence = my_mb_ucfirst($sentence);
    array_push($modifiedSentences, $sentence);
}

$modifiedSentences = implode($modifiedSentences);
echo $modifiedSentences;

function my_mb_ucfirst($str) {
    $fc = mb_strtoupper(mb_substr($str, 0, 1));
    return $fc.mb_substr($str, 1);
}

?>