$(function () {

});
function setCookie(name, value, options = {}) {

    options = {
        path: '/',
        // при необходимости добавьте другие значения по умолчанию
        ...options
    };

    if (options.expires instanceof Date) {
        options.expires = options.expires.toUTCString();
    }

    let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

    for (let optionKey in options) {
        updatedCookie += "; " + optionKey;
        let optionValue = options[optionKey];
        if (optionValue !== true) {
            updatedCookie += "=" + optionValue;
        }
    }

    document.cookie = updatedCookie;
}

function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}


document.addEventListener('DOMContentLoaded', function () {
    let counter = document.querySelector('.counter');
    let cookieValue = getCookie('counter');
    console.log(cookieValue);
    console.log(counter);
    counter.value = (cookieValue === undefined) ? 0 : cookieValue;
})
function clickUp() {
    document.querySelector('.counter').value++;
    //let val = document.querySelector('.counter').value;
    //val++;
    setCookie('counter', document.querySelector('.counter').value);
}

function clickDown() {
    document.querySelector('.counter').value--;
    //let val = document.querySelector('.counter').value;
    //val++;
    setCookie('counter', document.querySelector('.counter').value);
}

/*
document.querySelector('.inc').addEventListener('click', function () {
    let counter = document.querySelector('.counter');
    let curVal = counter.innerHTML;
    let newValue = Number(curVal) + 1;
    counter.innerHTML = newValue;
    setCookie('myCounter', newValue);
})

document.querySelector('.dec').addEventListener('click', function () {
    let counter = document.querySelector('.counter');
    let curVal = counter.innerHTML;
    let newValue = Number(curVal) - 1;
    counter.innerHTML = newValue;
    setCookie('myCounter', newValue);
})

document.addEventListener('DOMContentLoaded', function () {
    let counter = document.querySelector('.counter');
    let cookieValue = getCookie('myCounter')
    counter.innerHTML = (cookieValue === undefined) ? 0 : cookieValue ;
})
*/
