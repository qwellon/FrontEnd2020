//1.Какая из строк длиннее
function getMaxString(firstStr, secStr) {
    let result = 0;
    if (firstStr.length > secStr.length) {
        result = 1;
    } else if (firstStr.length < secStr.length) {
        result = -1;
    }
    return result;
}

//alert(getMaxString('qqq', 'qqqq'));

//2.Сделать первый символ заглавным
function setFirstToUpper(str) {
    str = str[0].toUpperCase() + str.substr(1, str.length);
    return str;
}

//alert(setFirstToUpper('qfhgjkro'));


//3. Количество гласных в строке
function vowSearch(str) {
    let s = 0;
    for (let i = 0; i < str.length; i++) {
        if ((str[i] == 'a') || (str[i] == 'e') || (str[i] == 'u') || (str[i] == 'i') || (str[i] == 'y') || (str[i] == 'o')) {
            s++
        }

    }
    return s;
}

//alert(vowSearch('uugfooyei'));

//4.Проверка на содержания спама
function spamCheck(str) {
    let s = false;
    for (let i = 0; i < str.length; i++) {
        if (str.includes('100% бесплатно') || str.includes('увеличение продаж') || str.includes('только сегодня') || str.includes('не удаляйте') || str.includes('ххх')) {
            s = true;
        }
        return s;
    }
}

//alert(spamCheck('pposdps только сегодня ыфвф вфы вфвы ффв фв'));

//5.Если строка длиннее + ...

function sliceStr(str, x) {
    if (str.length > x) {
        str = str.slice(0, (x - 3)) + '...'
    }
    return str;
}
//alert(sliceStr('qwertyuiopasd', 8));

//6. Палиндром?
function reverseString(str) {
    let splitString = str.split("");
    let reverseArray = splitString.reverse();
    let joinArray = reverseArray.join("");
    return joinArray;
}
function paliCheck(str) {
    if (str == reverseString(str)) {
        alert('Палиндром')
    } else {
        alert('Не палиндром')
    }
}
//paliCheck('ojojos');

