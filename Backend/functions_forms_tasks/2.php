<?php
//2. Создать форму с элементом textarea.
// При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
// Реализовать с помощью функции.

function findTop3LongWords($string) {
    $words = explode(' ', $string); // Бьем строку по проблеам и записываем как массив в переменную

    usort($words, function($a, $b) {
       return mb_strlen($b) - mb_strlen($a);
    });

    $chunk = array_chunk($words, 3);

    return $chunk[0];

//    $wordLength = [];
//    foreach ( $words as $key => $word) {
//        $wordLength[$key] = mb_strlen($word);
//    }
//
//    rsort ($wordLength);
//
//    $i = 1;
//    $bigWordsLength = array_splice($wordLength, 3);
//    $keys = array_keys($bigWordsLength);
//
//    $bigWords = [];
//    foreach ($keys as $key) {
//        $bigWords = $key;
//    }
}

$list = findTop3LongWords('test one lalalala four абрaф');

var_dump($list);
?>