<?php
//9. Написать функцию, которая переворачивает строку.
// Было "abcde", должна выдать "edcba".
// Ввод текста реализовать с помощью формы.

$word = $_POST['word'];
if ($word == '')
    $word = 'test';

echo revers($word);

function revers($word) {
    $reversedWord = '';
    for ($i = strlen($word); $i >= 0; $i--){
        $reversedWord = $reversedWord . $word[$i];
    }
    return $reversedWord;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <p>Введите слово:</p>
    <input type="text" name="word" placeholder="test">
    <input type="submit" value=Отправить>
</form>
<br>
</body>
</html>

