<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method=POST>
		<input type="text" placeholder=Hello>
		<input type="submit" value=Send>
	</form>
</body>
</html>

<?php 

class ContactForm {
	private $name;
	public function __construct($data) {
		$this->name = $data;
	}
}

$form1 = new ContactForm($_POST['name']);
var_dump($form1);
?>