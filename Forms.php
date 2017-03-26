<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form id="form" method="POST" action="mailer.php">
		<div class="l--first-screen__form__title">Оставьте заявку и&nbsp;наши менеджеры свяжутся с&nbsp;Вами</div>
		<input type="text" name="name" placeholder="Введите свое имя" required="">
		<input type="text" name="email" placeholder="Введите свой E-mail" required="">
		<input type="text" name="quantity" placeholder="Укажите желаемое количество" required="">
		<button class="cta">Отправить</button>
	</form>
</body>
</html>

<?php 
	if (!empty($_POST)) {
		$username = $_POST['username'];
		$text = content ...
	}
?>