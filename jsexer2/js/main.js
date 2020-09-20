$(function () {

});
const year = 2020;
let birthDate = prompt('Введите ваш год рождения');
alert('Вам возраст: ' + (year - birthDate) + '. Отличный результат!');

let diskSize = prompt('Какой размер вашего носителя (мб)? ');
let fileSize = prompt('Размер помещяемого файла (мб)?');
alert('Ваш носитель вместит данный файл в количестве ' + (Math.floor(diskSize / fileSize)) + ' шт.');

const rubToDol = 0.013;
const dolToRub = 75;
let currencySelect = +prompt('Какую валюты вы хотите обменять? Введите "1" если доллар, "2" если рубли');
currencySelect = currencySelect * 1;
if (currencySelect == 1) {
    let amount = prompt('Какую сумму в долларах вы хотите обменять?');
    let exchange = dolToRub * amount;
    deal = confirm('По завершению операции вы получите ' + exchange + ' рублей. Подтвердите согласие на обмен');
    if (deal = true) {
        alert('Обмен произведен! Вы обменяли ' + amount + ' долларов на ' + exchange + ' рублей. Спасибо за обращение. Ждем вас снова.');
    } else {
        alert('Обмен отменен, спасибо за обращение.');
    }
} else if (currencySelect == 2) {
    let amount = prompt('Какую сумму в рублях вы хотите обменять?');
    let exchange = rubToDol * amount;
    deal = confirm('По завершению операции вы получите ' + exchange + ' долларов. Подтвердите согласие на обмен');
    if (deal == true) {
        alert('Обмен произведен! Вы обменяли ' + amount + ' рублей на ' + exchange + ' долларов. Спасибо за обращение. Ждем вас снова.');
    } else {
        alert('Обмен отменен, спасибо за обращение.');
    }
} else {
    alert('Введено некорректное значение');
}
