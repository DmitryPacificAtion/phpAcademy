<?php 

// include 'car.php';
class User
{
	public $login;
	public $password; 
	public $email; 
	public $rating = 0;
	public $name;
	public $isLogged;

	public function login () {
		echo $this->name, ' logged in <br>';
		$this->isLogged = true;
	}
	public function logout () {
		echo $this->name, ' logged out <br>';
		$this->isLogged = false;
	}

} 

$eugen = new User;
$eugen->name = 'Женя';
// $eugen->login();

$vasya = clone $eugen;

var_dump($eugen);
var_dump($vasya);
/*$sasha = new Manager;
$sasha->name = 'Саша';

echo 'Eugen is: ', $eugen->isLogged;

echo '<br>';

class Manager extends User {
	protected $name;
	protected $isLogged;
}

$sasha = new Manager;
$sasha->name = 'Саша';
$sasha->login();

class Admin extends User {
	protected $name;
	protected $isLogged;
}

$kolya = new Admin;
$kolya->name = 'Николай';

var_dump($eugen);
var_dump($sasha);
var_dump($kolya);

$letter = [name => 'name', email => 'email', message => 'message'];

$obj = (object)$letter;

var_dump($obj);*/
?>
