<?php
//4. Написать функцию, которая выводит список файлов в заданной директории.
// Директория задается как параметр функции.

//$path = dir('./');
//function getFiles($path) {
//    while ($entry = $path->read()) {
//        echo "<a href='$entry'>$entry</a><br>";
//    }
//    $path->close();
//}
//getFiles($path);

$inputs = $_POST['inputs'];
if (preg_match('/(\w{1}\:)(.\w*)*/i', $inputs))
    $path = dir($inputs);
else
    $path = dir(__DIR__ );

function parseDir ($path) {
    while ($entry = $path->read()) {
        echo "<a href='$entry'>$entry</a><br>";
    }
    $path->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <p>В какой дериктории хотите найти файлы?</p>
    <input type="text" name="inputs" placeholder="F:\WebSerwers\OpenServer\domains\phpAcademy\Backend">
    <input type="submit" value=Отправить>
</form>
<br>
<?php parseDir($path); ?>
</body>
</html>