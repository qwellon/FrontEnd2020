$(function () {

});
$("#click").click(function () {

    let elem = document.querySelector('.codeName');
    let colname = document.querySelector('.colorName');

    $(".color_block").css('background-color', elem.value);
    // $(".name").text(colorName.value);
    $('.name').text(colname.value);
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
    let codeName = document.querySelector('.codeName');
    let colorName = document.querySelector('.colorName');
    let cookieCode = getCookie('codeName');
    let cookieColor = getCookie('colorName');

    codeName.value = (cookieCode === undefined) ? 0 : cookieCode;
    colorName.value = (cookieColor === undefined) ? 0 : cookieColor;
})