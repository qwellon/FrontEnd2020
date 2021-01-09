<?php

// $gcontent = file_get_contents('http://ddred.ru/users.php');

// $pcontent = file_put_contents("user.json", $gcontent);

$gconfile = file_get_contents('user.json');

$array = json_decode($gconfile);
echo "<pre>";
print_r($array);
echo "</pre>";
echo "<hr>";
// var_dump($array);


//- написать функцию, которая возвращает всех однофамильцев
function getSecName()
{
    $gconfile = file_get_contents('user.json');
    $array = json_decode($gconfile, true);
    $secondNamesCount = [];
    $sameSecName = [];

    echo "<pre>";
    print_r($array);
    echo "</pre>";
    foreach ($array as $key => $val) {

        $arrVal = explode(" ", $val['name']);
        $sname = $arrVal[1];
        if ($arrVal[1]) {
            $secondNamesCount[$sname] += 1;
        }
    }
    foreach ($secondNamesCount as $key => $val) {
        if ($secondNamesCount[$key] > 1) {
            array_push($sameSecName, $key);
        }
    }
    foreach ($array as $key => $val) {
        $arrVal = explode(" ", $val['name']);
        if (in_array($arrVal[1], $sameSecName)) {
            array_push($sameSecName, $key);
        }
    }
    echo "<pre>";
    print_r($sameSecName);
    echo "</pre>";
    //var_dump($secondNamesCount);
}

//getSecName();

//- написать функцию, которая находит полных тезок
function getSameName()
{
    $gconfile = file_get_contents('user.json');
    $array = json_decode($gconfile, true);
    $sameNamesCount = [];
    $sameName = [];
    foreach ($array as $key => $val) {

        $arrVal = $val['name'];
        $sname = $arrVal;
        if ($arrVal) {
            $sameNamesCount[$sname] += 1;
        }
    }
    foreach ($sameNamesCount as $key => $val) {
        if ($sameNamesCount[$key] > 1) {
            array_push($sameName, $key);
        }
    }

    // foreach ($array as $key => $val) {
    //     $arrVal = $val['name'];
    //     if (in_array($arrVal[1], $sameName)) {
    //         array_push($sameName, $key);
    //     }
    // }
    echo "<pre>";
    print_r($sameName);
    echo "</pre>";
}
//getSameName();

//- написать функцию, которая возвращает всех пользователей, которые старше 31 года
function getSomeAge($age)
{
    $gconfile = file_get_contents('user.json');
    $array = json_decode($gconfile, true);
    echo "Список пользователей старше $age : ";
    foreach ($array as $key => $value) {
        if ($value['age'] > $age) {
            echo "<pre>";
            print_r($array[$key]['name']);
            echo "</pre>";
        }
    }
    // foreach ($array as $key => $val) {

    //     $arrVal = $val['age'];
    //     $sage = $arrVal;
    //     if ($arrVal > 31) {
    //         $sameAgeCount[$sname] += 1;
    //     }
    // }
    // foreach ($sameAgeCount as $key => $val) {
    //     if ($sameAgeCount[$key] > 1) {
    //         array_push($someAge, $key);
    //     }
    // }

    // foreach ($array as $key => $val) {
    //     $arrVal = $val['name'];
    //     if (in_array($arrVal[1], $sameName)) {
    //         array_push($sameName, $key);
    //     }
    // }

}

//getSomeAge(31);

//- написать функцию, которая вычисляет средний возраст пользователей
function getAverageAge()
{
    $gconfile = file_get_contents('user.json');
    $array = json_decode($gconfile, true);
    $sumAge = 0;
    foreach ($array as $key => $value) {
        //echo 1;
        //echo $value['age'];
        $sumAge += $value['age'];
    }

    echo "Средний возраст пользователей: " . round($sumAge / count($array), 0);
}

//getAverageAge();

//- написать функцию, которая определяет сколько в компании сотрудников с одинаковой должностью.

function getSamePosition()
{
    $gconfile = file_get_contents('user.json');
    $array = json_decode($gconfile, true);
    $samePositionCount = [];
    foreach ($array as $key => $val) {

        $arrVal = $val['position'];
        $spos = $arrVal;
        if ($arrVal) {
            $samePositionCount[$spos] += 1;
        }
    }

    echo "<pre>";
    print_r($samePositionCount);
    echo "</pre>";
}
//getSamePosition();

//- написать функцию рандомного увольнения - если возраст кратен 3 или его зовут Bob Proper. 
//Т.е. функция должна вернуть массив без сотрудников, которые подверглись увольнению.

function layoff()
{
    $gconfile = file_get_contents('user.json');
    $array = json_decode($gconfile, true);
    foreach ($array as $key => $value) {
        $age = $value['age'];
        $name = $value['name'];
        $b = 3;
        if (($age % $b) == 0 || ($name == "Bob Proper")) {
            unset($array[$key]);
        }
    }
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
//layoff();

//- написать функцию, которая выдает зарплату сотруднику. 

function salary()
{
    $gconfile = file_get_contents('user.json');
    $array = json_decode($gconfile, true);
    echo "Выдана зарплата сотрудникам: </br>";
    foreach ($array as $key => $value) {
        $age = $value['age'];
        $name = $value['name'];
        $pos = $value['position'];
        $salArray = [];

        if ($pos == "Cleaner" || $pos == "Director" || $pos == "Clerk") {
            $salArray[$name] = round((rand(1000, 3000) * 3.2 - $age), 0);
            echo "<pre>";
            print_r($salArray);
            echo "</pre>";
        } else {
            $salArray[$name] = round((rand(1000, 3000) * 0.98 - $age), 0);
            echo "<pre>";
            print_r($salArray);
            echo "</pre>";
        }
    }
}

//salary();
