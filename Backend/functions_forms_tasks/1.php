<?php
//1. Создать форму с двумя элементами textarea.
// При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
// Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b),
// которая будет возвращать массив с общими словами.

function getCommonWords ($a, $b) {
    $a = preg_replace('#[^\W\s]#', '', $a);
    $a = mb_strtolower($a);

    $aWords = explode(' ', $a);
    $bWords = explode(' ', $b);

    return array_intersect($aWords, $bWords);
}
?>