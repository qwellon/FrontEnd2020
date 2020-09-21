/*let month = prompt('Введите номер месяца', '1');
switch (month) {
    case '1':
        alert('Январь');
        break;
    case '2':
        alert('Фев');
        break;
    case '3':
        alert('Мар');
        break;
    case '4':
        alert('Апр');
        break;
    case '5':
        alert('Май');
        break;
    case '6':
        alert('Июнь');
        break;
    case '7':
        alert('Июль');
        break;
    case '8':
        alert('Авг');
        break;
    case '9':
        alert('Сен');
        break;
    case '10':
        alert('Окт');
        break;
    case '11':
        alert('Ноябрь');
        break;
    case '12':
        alert('Декабрь');
        break;
    default:
        alert('Неверное значение')
}
*/
/*
let x1 = prompt('Число 1', '1');
x1 = parseInt(x1);
let x2 = prompt('Число 2', '2');
x2 = parseInt(x2);
let operator = prompt('Введите оператор (+,-,*,/)', '+');
switch (operator) {
    case '+':
        alert('Результат ' + (x1 + x2));
        break;
    case '-':
        alert('Результат ' + (x1 - x2));
        break;
    case '*':
        alert('Результат ' + x1 * x2);
        break;
        if (x2 == 0) {
            alert('Делить на 0 нельзя');
        }
    case '/':
        alert('Результат ' + x1 / x2)
        break;


    default:
        break;
}
*/

/* Вывести # сколько попросил пользователь*/
/* 
let x = parseInt(prompt('Введите число', '5'));
while (x > 0) {
   document.write('#<br>');
   x--;
}
*/


/* Вывести числа по убыванию с запроса пользователя */
/*
let x = parseInt(prompt('Введите число', '5'));
while (x >= 0) {
    document.write(x + '<br>');
    x--;
}
*/

/*Число и степнь*/
/*
let x = parseInt(prompt('Введите число', '5'));
let y = parseInt(prompt('Введите степень', '2'));
let z = y;
let result = 1;
while (y > 0) {
    result = result * x;
    y--;
}
document.write('Число ' + x + ' в степени ' + z + ' = ' + result);
*/

//4. запросить 2 числа и найти все общие делители
/*
let x = parseInt(prompt('Введите число 1', '5'));
let y = parseInt(prompt('Введите число 2', '2'));

let min = (x > y) ? y : x;
while (min > 1) {
    if ((x % min) == 0 && (y % min) == 0) {
        document.write('Делитель: ' + min + '<br>');
    }
    min--;
}
*/

//Осчитать факториал
/*
let x = parseInt(prompt('Введите число', '5'));
let number = x;
result = 1;
while (x > 0) {
    result = result * x;
    x--;
}
document.write('Факториал числа ' + number + ' равен ' + result);
*/

// DO WHILE

//Предлагать решить, пока не будет верно
/*
let x = 0;
do {
    x = prompt('Решите пример: 2 + 2 * 2 = ')
} while (x != 6);
alert('Верно!');
*/

//Делить 1000 на 2, пока не будет 50, сколько делений произвели?

/*
let x = 1000;
let y = 2;
let count = 0;

do {
    x = x / 2;
    count++;
    document.write(x + '<br>');
} while (x >= 50);

document.write('Число: ' + x + ' , делений: ' + count);
*/

//FOR
//Выводить числа кратные числу пользователя
/*
let x = prompt('введите число', '10');
for (let i = 1; i <= 100; i++) {
    if ( (i % x) == 0 && i != x ) {
        document.write(i + '<br>')
    }
}
*/

//Вывести каждый четвертый элемент из диапозона
/*
let x = parseInt(prompt('введите число 1', '10'));
let y = parseInt(prompt('введите число 2', '20'));
let counter = 1;

for (let i = x; i <= y; i++) {
    if ((counter % 4) == 0) {
        document.write(i + '<br>');
    }
    counter++;
}
*/

//Простое ли число

let x = parseInt(prompt('введите число', '10'));
let result = true;
for (let i = x - 1; i > 1; i++) {
    if ((x % i) == 0) {
        result = false;
        break;
    }
}
alert((result) ? 'Число простое' : 'Число не простое');