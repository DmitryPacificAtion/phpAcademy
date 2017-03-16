var operator =  prompt('Укажите действиекоторое хотите произвести: +, -, /, %, ^, sqrt');
var a =  +prompt('Укажите 1-й оператор');
var b =  +prompt('Укажите 2-й оператор');

document.write(calculate(operator, a, b));

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
function point (this) {
	if (this.isNumeric())
	return this.toFixed(2);
	else
		return this;
}