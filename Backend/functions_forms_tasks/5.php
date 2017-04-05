<?php
//5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
// Директория и искомое слово задаются как параметры функции.


$myDir = $_POST['myDir'];

if (preg_match('/(\w{1}\:)(.\w*)*/i', $myDir))
    $path = dir($myDir);
else
    $path = dir(__DIR__);

if ($_POST['word'] != '')
    $word = $_POST['word'];
else
    $word = 'test';

function search($path, $word) {
    while ($entry = $path->read()) {
        if ( preg_match("/$word/", $entry))
            echo "<a href='$entry'>$entry</a><br>";
    }
    $path->close();
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
    <p>В какой дериктории хотите найти файлы?</p>
    <input type="text" name="myDir" placeholder="C:\Users">
    <p>Какое слово хотите найти</p>
    <input type="text" name="word" placeholder="test">
    <input type="submit" value=Отправить>
</form>
<br>
<?php search($path, $word); ?>
</body>
</html>
