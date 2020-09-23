function show5Blocks() {
    for (let i = 1; i <= 5; i++) {
        document.write('<h2>Header ' + i + '</h2>');
    }
}
//show5Blocks();

function incAndLog(x) {
    x = x + 1;
    alert('inc x = ' + x);
    log.innerHTML += '<br>inc x = ' + x;
}

// Принимает 2 числа возвращает меньшее

function min(a, b) {
    if (a > b) {
        return b;
    } else {
        return a;
    }
    //  return (a > b) ? b : a;
}
//alert(min(90, 4))

//Возводит переданное число в переданную степень

function power(x, y) {
    let result = 1;
    while (y > 0) {
        result = result * x;
        y--;
    }

    return result;
}

// Написать функцию с 2 числами +-/*
function calc(a, b, operator) {
    switch (operator) {
        case '+':
            return a + b;
        case '-':
            return a - b;
        case '*':
            return a * b;
        case '/':
            return a / b;


        default:
            break;
    }
}

//поиск простого числа
function isSimple(x) {
    for (let i = x - 1; i > 1; i--) {
        if ((x % i) == 0) {
            return 'Не простое';
        }
    }
    return 'Число простое';
}

//принимает число, выводит таблицу умножения
function table(x) {
    for (let i = 1; i <= 10; i++) {
        document.write(x + ' * ' + i + ' = ' + (x * i) + '<br>');
    }
}

// реализует оператор % (остаток от деления)

function rest(a, b) {
    let div = parseInt(a / b);
    return a - b * div;
}

//принимает 1-5 чисел выдает сумму
function summ() {
    let result = 0;
    for (let i = 0; i < arguments.length; i++) {
        if (i > 4) {
            break;
        }
        result += arguments[i];
    }
    return result;


}
//принимает 1-5 чисел выдает наибольшее
function max() {
    let max = arguments[0];
    for (let i = 0; i < arguments.length; i++) {
        if (arguments[i] > max && i < 4) {
            max = arguments[i];
        }
    }
    return max;
}
//выводить четные и нечетные из диапозона

function showNumbers(a, b, even) {
    for (let i = a; i <= b; i++) {
        if (even) {
            document.write(i + ' ');
        } else {
            if ((i % 2) != 0) {
                document.write(i + ' ');
            }

        }

    }
}
//принимает дату, возвращает следующую дату

function getNextDay(day, month, year) {
    let maxDay = 30;
    if (month == 2) {
        maxDay = isLeapYear(year) ? 29 : 28;
    } else {
        if (month == 1 || month == 3 || month == 5 || month == 7 || month == 8 || month == 10 || month == 12) {
            maxDay = 31;
        }
    }
    if (day == maxDay) {
        day = 1;
        if (month == 12) {
            month = 1;
            year++;
        } else {
            month++
        }
    } else {
        day++
    }
    if (day < 10) {
        day = '0' + month;
    }
    return day + '.' + month + '.' + year;
}

function isLeapYear(year) {
    return ((year % 400) == 0 || ((year % 4) == 0 && (year % 100) !== 0));
}

