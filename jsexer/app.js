let name = prompt('Ваше имя');
alert('Ваше имя '+name);


5 > 4 // true
"ананас" > "яблоко" // false
"2" > "12" // false --true
undefined == null //true
undefined === null // false
null == "\n0\n" //true -- false
null === +"\n0\n" // false



if ("0") {
  alert( 'Привет' );
}

/***************** */

let officialjs = prompt('Какое официальное название JS?','')
if (officialjs == 'ECMAScript') {
	alert('verno');
} else {
	alert('neverno');
}

/***************** */

let integer = prompt('Введите любое натуральное число', )
if (integer>0) {
	alert('1');
} else if (integer===0) {
	alert('0');
} else if (integer<0) {
	alert('-1');
}

if (integer > 0) {
	alert('1');
}
else if (integer < 0) {
	alert('-1');
}
else {
	alert('0');
}

/***************** */

let result = (a + b < 4) ? 'мало' : 'много';

/***************** */

let message = (login == 'Сотрудник') ? 'Привет' :
(login == 'Директор') ? 'Здравствуйте' :
(login == '') ? 'Нет логина' :
'';