document.write ('hello wordl!');
$(function(){

});
const year = 2020;
let birthDate = prompt ('Введите ваш год рождения');
alert ('Вам возраст: ' + (year - birthDate) + '. Отличный результат!');

let diskSize = prompt ('Какой размер вашего носителя?');
let fileSize = prompt ('Размер помещяемого файла?');
alert ('Ваш носитель вместит данный файл в количестве ' + (Math.floor(diskSize / fileSize)) + ' шт.')