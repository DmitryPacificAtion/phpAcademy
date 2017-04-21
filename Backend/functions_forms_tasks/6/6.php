<?php
//6. Создать страницу, на которой можно загрузить несколько фотографий в галерею.
// Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.

$uploadImages = $_FILES['images'];
$uploadFolder = './gallery';

$showImages = [];
foreach ( $uploadImages['tmp_name'] as $uploadImagePath) {
    $imageName = sprintf('%s-%s.jpg', time(), rand(0,1000));
    $imagePath = sprintf('%s/%s', $uploadFolder, $imageName);
    if (move_uploaded_file($uploadImagePath, $imageName)) {
        $showImages = $imageName;
    }
    else echo 'Не возможно загрузить файл';
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action method="post" enctype="multipart/form-data">
    <input type="file" name="images[]" multiple>
    <p>&nbsp;</p>
    <input type="submit" value=Отправить>
</form>
<br>
<table>
<?php
    $counter=0;
    echo '<tr>';
    foreach ($showImages as $item):
        $counter++;
        if ($counter%4 == 0) {
            echo '</tr><tr>';
            $counter = 0;
        }?>
        <td><img src="/gallery/<?php echo $item; ?>" alt=""></td>
<?php
    endforeach;
    echo '</tr>';
?>

</table>
</body>
</html>