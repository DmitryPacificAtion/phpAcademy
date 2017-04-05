<?php
//10. Написать функцию, которая считает количество уникальных слов в тексте.
// Слова разделяются пробелами.
// Текст должен вводиться с формы.

$text = mb_strtolower($_POST['text']);
$arrayText = explode(' ', preg_replace('/[,"!?.\n\t]/', '', $text) );
$unicArray = [];
$counter = 0;
foreach ($arrayText as $word) {
    if (array_key_exists($word, $unicArray)){
        continue;
    }
    else {
        $tempArray = [$word => ++$counter];
        $unicArray += $tempArray;
    }
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
    <p>Введите текст:</p>
    <textarea name="text" cols="60" title="text" rows="20">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.
        Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.
        В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов,
        используя Lorem Ipsum для распечатки образцов.
        Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.
        Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и,
        в более недавнее время, программы электронной вёрстки типа Aldus PageMaker,
        в шаблонах которых используется Lorem Ipsum.</textarea>
    <input type="submit" value=Отправить>
</form>
<br>
<?php foreach ($unicArray as $word => $index) {
    echo "{$index}: {$word}<br>";
}?>
</body>
</html>

