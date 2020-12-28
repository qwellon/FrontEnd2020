<?php

// $gcontent = file_get_contents('http://ddred.ru/users.php');

// $pcontent = file_put_contents("user.json", $gcontent);

$gconfile = file_get_contents('user.json');

$array = json_decode($gconfile);
echo "<pre>";
print_r($array);
echo "</pre>";

// var_dump($array);

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

function getSomeAge()
{
    $gconfile = file_get_contents('user.json');
    $array = json_decode($gconfile, true);
    $sameAgeCount = [];
    $someAge = [];
    foreach ($array as $key => $val) {

        $arrVal = $val['age'];
        $sage = $arrVal;
        if ($arrVal > 31) {
            $sameAgeCount[$sname] += 1;
        }
    }
    foreach ($sameAgeCount as $key => $val) {
        if ($sameAgeCount[$key] > 1) {
            array_push($someAge, $key);
        }
    }

    // foreach ($array as $key => $val) {
    //     $arrVal = $val['name'];
    //     if (in_array($arrVal[1], $sameName)) {
    //         array_push($sameName, $key);
    //     }
    // }
    echo "<pre>";
    print_r($someAge);
    echo "</pre>";
}

getSameName();
