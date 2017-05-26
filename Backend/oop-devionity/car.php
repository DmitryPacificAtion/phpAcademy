<?php 

class Car {
	public $brand;
	public $model;
	public $year;
	public $driver;
	private $price;

	public function __construct() {
		echo 'Car created!', '<br>';
	}

	public function getPrice($format=false) {
		if ($format) {
			return number_format($this->price, 2);
		}
		else return $this->price;
	}
	public function setPrice($param) {
		$param = round($param, 2);
		$this->price = $param;
	}

	public function showBrand() {
		echo 'Brand is: ', $this->brand, '<br>';
	} 
	public function showModel() {
		echo 'Model is: ', $this->model, '<br>';
	}
}

$toyota = new Car;
$toyota->brand = 'Toyota';
$toyota->model = 'Corolla';
$toyota->year = 2000;
$toyota->driver = $kolya->name;
$toyota->showBrand(); 
$toyota->showModel();
$toyota->setPrice(123000.543);
echo 'Price is: ', $toyota->getPrice(), ' UAH';

/*$mazda = new Car;
$mazda->brand = 'Mazda';
$mazda->model = '6';
$mazda->year = 2015;
$mazda->driver = $eugen->name;

$ford = new Car;
$ford->brand = 'Ford ';
$ford->model = 'Taurus';
$ford->year = 1995;
$ford->driver = $sasha->name;

var_dump($toyota);
var_dump($mazda);
var_dump($ford);
echo '<br>';
print_r($toyota);
print_r($mazda);
print_r($ford);*/


class WaterCar extends Car {
	public $waterSpeed;
}
?>