<?php
//2. Создать форму с элементом textarea.
// При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
// Реализовать с помощью функции.

$text = $_POST['text'];
function top3Longer($text){
    $words = explode(' ', $text); // Бьем строку по проблеам и записываем как массив в переменную

    usort($words, function($a, $b) {
       return mb_strlen($b) - mb_strlen($a);
    });

    $chunk = array_chunk($words, 3);

    return $chunk[0];
}

var_dump(top3Longer($text));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <textarea name="text" id="text" cols="30" rows="10">Lorem ipsum – псевдо-латинский текст,
        который используется для веб дизайна, типографии, оборудования, и распечатки вместо английского текста для того,
        чтобы сделать ударение не на содержание, а на элементы дизайна. Такой текст также называется как заполнитель.
        Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации,
        например текст, шрифт или разметка.
        Lorem ipsum по большей части является элементом латинского текста классического автора и философа Цицерона.</textarea>
        <br>
    <input type="submit" value=Отправить>
</form>
</body>
</html>
