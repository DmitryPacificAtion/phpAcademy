<?php
//8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
// Все добавленные комментарии выводятся над текстовым полем.
// Реализовать проверку на наличие в тексте запрещенных слов, матов.
// При наличии таких слов - выводить сообщение "Некорректный комментарий".
// Реализовать удаление из комментария всех тегов, кроме тега <b>.

$user = strip_tags($_POST['name']);
$text = strip_tags($_POST['comment'], '<b>');
$path = __DIR__.'./comments.txt';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top:30px">

		<?php
		if (!empty($user) && !empty($text)) file_put_contents($path, "{$user}|{$text}".PHP_EOL, FILE_APPEND);
		else {
			file_put_contents($path, ''); echo 'Оставьте комментарий первым';
		}

		$data = file_get_contents($path);
		$comments = explode(PHP_EOL, $data);
		$badWordsList = file_get_contents(__DIR__.'/bad-words-list.txt');
		$badWordsList = explode(PHP_EOL, $badWordsList);
		foreach ($comments as $comment):
            if ($comment === '') continue;
            list($u, $k) = explode('|',$comment);?>
            <p><?php echo "<strong>Имя:</strong> $u";?></p>
            <?php
            foreach ($badWordsList as $badWord) {
                $k = mb_strtolower($k);
                $badWord = mb_strtolower($badWord);
				if (preg_match($badWord, $k) ) {?>

                <p>
                    <?php echo "<strong>Не корректный комментарий!</strong>"; break; ?>
                </p>
                    <?php } }?>
			<p><?php echo "<strong>Комментарий:</strong> $k";?></p>

		<?php endforeach; ?>
	</div>
	<div class="container" style="margin-top:30px">
		<form action method="post">
			<div class="form-group">
				<p>Ваше имя:</p>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<p>Комментарий:</p>
				<textarea name="comment" cols="40" rows="10" class="form-control"></textarea>
			</div>
			<button class="btn btn-success">Отправить</button>

		</form>
	</div>
</body>
</html>
