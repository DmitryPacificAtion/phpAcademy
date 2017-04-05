<?php
//1. Создать форму с двумя элементами textarea.
// При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
// Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b),
// которая будет возвращать массив с общими словами.

$a = $_POST['a'];
$b = $_POST['b'];

    function getCommonWords ($a, $b) {
        $a = preg_split('/[\s,]+/',$a);
        $b = preg_split('/[\s,]+/',$b);

        return array_intersect($a, $b);
    }
echo PHP_EOL;
print_r(getCommonWords($a, $b));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <textarea name="a" id="a" cols="30" rows="10">Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь</textarea>
    <textarea name="b" id="b" cols="30" rows="10">Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад</textarea>
    <br>
    <input type="submit" value=Отправить>
</form>
</body>
</html>
