<?php

// $gcontent = file_get_contents('http://ddred.ru/users.php');

// $pcontent = file_put_contents("user.json", $gcontent);

$gconfile = file_get_contents('user.json');

$array = json_decode($gconfile);

var_dump($array);

function getSecName()
{
    $gconfile = file_get_contents('user.json');
    $array = json_decode($gconfile, true);
    $secondNamesCount = [];
    $sameSecName = [];

    // echo "<pre>";
    // print_r($array);
    // echo "</pre>";
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

getSecName();
    
    // if ($array["name"] == $array["name"]) {
    //     var_dump($array["name"]);
    // }
