// var operator =  prompt('Укажите действиекоторое хотите произвести: +, -, /, %, ^, sqrt');
// var a =  +prompt('Укажите 1-й оператор');
// var b =  +prompt('Укажите 2-й оператор');

// document.write(calculate(operator, a, b));
window.onload = function() {
	var input = document.querySelector('.display input');
	var val = input.getAttribute('value');



//Butons
var one = document.getElementById('one');
var two = document.getElementById('two');
var three = document.getElementById('three');
var four = document.getElementById('four');
var five = document.getElementById('five');
var six = document.getElementById('six');
var seven = document.getElementById('seven');
var eight = document.getElementById('eight');
var nine = document.getElementById('nine');
var point = document.getElementById('point');
var zero = document.getElementById('zero');
var sum = document.getElementById('sum');
var dif = document.getElementById('dif');
var div = document.getElementById('div');
var mul = document.getElementById('mul');
var mod = document.getElementById('mod');
var pow = document.getElementById('pow');
var sqr = document.getElementById('sqr');

// var keybord = document.getElementsByClassName('keybord');
one.addEventListener('click', console.log(this.innerHTML));
two.addEventListener('click', console.log(this.innerHTML));


function addText (value) {
	var result = value + value;
	input.setAttribute("value", result);
}

function calculate (operator, a, b){
	var result = 0;
	switch (operator) {
		case '+':
		result = sum (a, b);
		break;
		case '-':
		result = dif (a, b);
		break;
		case '/':
		result = div (a, b);
		break;
		case '*':
		result = mul (a, b);
		break;
		case '%':
		result = mod (a, b);
		break;
		case '^':
		result = pow(a, b);
		break;
		case 'sqr':
		case 'ійк':
		case 'ыйк':
		case 'sqrt':
		case 'ійке':
		case 'ыйке':
		result = sqr (a, b);
		break;
		default:
		alert('Вы ввели неправильный оператор');
		break;
	}
}

function sum (a, b) {
	return a + b;
}
function dif (a, b) {
	return a - b;
}
function mul (a, b) {
	return a * b;
}
function mod (a, b) {
	if (b)
		return a % b;
	else
		alert( 'На делить 0 нельзя!');
}
function div (a, b) {
	if (b)
		return a / b;
	else
		alert( 'На делить 0 нельзя!');
}
function sqr (a, b) {
	return Math.sqrt(a, b);
}
function pow (a, b) {
	return Math.pow(a, b);
}
// function point (this) {
// 	if (this.isNumeric())
// 	return this.toFixed(2);
// 	else
// 		return this;
// }

};