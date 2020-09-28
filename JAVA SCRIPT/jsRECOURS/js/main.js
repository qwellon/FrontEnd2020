//1 вычисление факториала заданного числа
function factorial(x) {
    if (x == 2) {
        return x;
    }
    return factorial(x - 1) * x;
}
//alert(factorial(5));

/* 2 вывод чисел по возрастанию и убыванию*/
/**let x = parseInt(prompt('введите число 1', '10'));
let y = parseInt(prompt('введите число 2', '20'));

function showNumbers(x, y) {
    document.write(x + '<br>');
    if (x <= y) {
        showNumbers(x + 1, y);
    }
}
*/
//showNumbers(x, y);

function showNumbers2(x, y) {
    document.write(y + '<br>');
    if (y >= x) {
        showNumbers2(x, y - 1);
    }
}

//showNumbers2(x, y);

/** 3. Написать функцию, которая выводит заданное число задом на перед */

function reverse(x) {
    let rest = x % 10;
    document.write(rest);

    let newNumber = (x - rest) / 10;
    if (newNumber > 9) {
        reverse(newNumber)
    } else {
        document.write(newNumber);
    }
}
//reverse(12345);

/** 4. Сумма цифр числа */
function summ(x) {
    let rest = x % 10;

    let newNumber = (x - rest) / 10;

    if (newNumber > 9) {
        document.write(rest + ' + ');
        return rest + sum(newNumber);
    } else {
        document.write(rest + ' + ' + newNumber);
        return rest + newNumber;
    }
}
//alert(sum(1337));
