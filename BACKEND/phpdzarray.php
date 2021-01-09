<?php
// //1.Имеется массив из 10 элементов, структура элемента:
// name, company, position. Вывести на экран массив в
// следующем формате: «“Name” is working in “Company”
// as: “position”».

$arr = [
    ['name' => 'Stas', 'company' => 'Microsoft', 'position' => 'Разработчик'],
    ['name' => 'Ivan', 'company' => 'ITStep', 'position' => 'Преподаватель'],
    ['name' => 'Andrei', 'company' => 'Apple', 'position' => 'Инженер'],
    ['name' => 'Nastya', 'company' => 'Microsoft', 'position' => 'Менеджер'],
    ['name' => 'Anya', 'company' => 'Samsung', 'position' => 'Инженер'],
    ['name' => 'Dima', 'company' => 'ITStep', 'position' => 'Преподаватель'],
    ['name' => 'Sergei', 'company' => 'Apple', 'position' => 'Разработчик'],
    ['name' => 'Vova', 'company' => 'Samsung', 'position' => 'Менеджер'],
    ['name' => 'Sveta', 'company' => 'Apple', 'position' => 'Менеджер'],
    ['name' => 'Oleg', 'company' => 'Samsung', 'position' => 'Инженер'],

];

// echo "<pre>";
// print_r($arr);
// echo "</pre>";

foreach ($arr as $key => $val) {
    echo $val[name]  . " - " . $val[position] . " в " . $val[company] . "<br>";
};
echo "<hr>";

// 2. Отфильтровать массив из задания 1 и вывести работников в зависимости от компаний в виде списка.


function getSameCompany($com)
{
    $arr = [
        ['name' => 'Stas', 'company' => 'Microsoft', 'position' => 'Разработчик'],
        ['name' => 'Ivan', 'company' => 'ITStep', 'position' => 'Преподаватель'],
        ['name' => 'Andrei', 'company' => 'Apple', 'position' => 'Инженер'],
        ['name' => 'Nastya', 'company' => 'Microsoft', 'position' => 'Менеджер'],
        ['name' => 'Anya', 'company' => 'Samsung', 'position' => 'Инженер'],
        ['name' => 'Dima', 'company' => 'ITStep', 'position' => 'Преподаватель'],
        ['name' => 'Sergei', 'company' => 'Apple', 'position' => 'Разработчик'],
        ['name' => 'Vova', 'company' => 'Samsung', 'position' => 'Менеджер'],
        ['name' => 'Sveta', 'company' => 'Apple', 'position' => 'Менеджер'],
        ['name' => 'Oleg', 'company' => 'Samsung', 'position' => 'Инженер'],

    ];
    echo "В компании " . $com . " работают: <br>";
    foreach ($arr as $key => $val) {

        if ($val[company] == $com) {

            echo "<pre>";
            print_r($val[name]);
            echo "</pre>";
        }
    }
}
getSameCompany("Microsoft");
getSameCompany("Apple");
getSameCompany("Samsung");
getSameCompany("ITStep");

echo "<hr>";

// 3. Создать массив из 10 чисел. В первый элемент записать число 1. Каждое следующее число генерируется
// случайно и записывается в массив при условии, если
// оно больше предыдущего. Результат массива вывести
// на страницу.

function arrayGenMinToMax()
{
    $array = [1];

    for ($i = 1; $i < 10; $i++) {
        $array[] = rand(0, 100);
        if ($array[$i] < $array[$i - 1]) {
            array_pop($array);
            $i--;
        };
    }
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
arrayGenMinToMax();
echo "<hr>";

// 4. Создать массив из 10 чисел. Элемент массива: число
// с плавающей точкой и степень округления. Заполнить
// массив, округлить и вывести на страницу.
// Пример вывода:
function arrayIntRounded()
{
    $array = [
        [1.323, 0],
        [2.333, 2],
        [3.3332, 3],
        [4.333, 0],
        [5.11, 1],
        [6.3323, 5],
        [7.33231233, 4],
        [8, 2],
        [9.112312, 2],
        [10.32221, 1]
    ];



    foreach ($array as $key => $val) {

        $floRound = round($val[0], $val[1]);

        echo $val[0] . " rounded to " . $val[1] . ": " . $floRound . "<br>";
    };
};
arrayIntRounded();

echo "<hr>";

//5.5. Создать массив из 5 элементов. Элементом массива является массив из 5 цифр. Заполнить элементы
// случайными числами от 10 до 100. Вывести массив,
// минимальные значения в каждом столбце выделить
// красным цветом. Найти сумму минимальных элементов в каждом столбце и их среднее значение.

function maxOfArray()
{
    $array = [];
    $sum = 0;
    $middle = 0;
    for ($i = 0; $i < 5; $i++) {
        $array[$i] = [];
        for ($j = 0; $j < 5; $j++) {
            $array[$i][$j] = rand(10, 99);
        }
    }
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    foreach ($array as $key => $val) {
        $sum += min($val);
    };

    $middle = $sum / 5;

    echo "Сумма минимальных значений: " . $sum . "<br>" . "Среднее арифметическое: " . $middle;
}
maxOfArray();
