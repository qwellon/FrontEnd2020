<?php
$request = $_REQUEST;
$errors = [];
foreach ($request as $k => &$item) { #
    $item = trim(strip_tags($item));
    if (empty($item)) {
        $errors[$k] =  'Не заполнили поле';
    }
}

function getPasswordHash($userPassword)
{
    $sold = 'web2020';
    $hashString = $userPassword . $sold;
    return md5($hashString);
}

function saveResult($req)
{
    $string = '';
    foreach ($req as $k => $val) {
        $string .= $k . ': ' . $val . PHP_EOL;
    }
    $save = file_put_contents('form.txt', $string, FILE_APPEND);
    return $save;
}
?>

<form method="get">
    <input placeholder="Имя" name="name" type="text">
    <input placeholder="Фамииля" name="sname" type="text">
    <input placeholder="Возраст" name="age" type="text">
    <input placeholder="Пароль" name="pass" type="text">
    <input placeholder="Отправить" name="submit" type="submit">
</form>


// $k = 2;
// function myFunc()
// {
// global $k;
// $res = 1 + $k;
// return $res;

// }

// echo myFunc();