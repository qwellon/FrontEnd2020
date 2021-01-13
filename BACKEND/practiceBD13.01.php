<?php

$mysql = new mysqli("localhost", "mysql", "mysql", "hello");
$result = $mysql->query('SELECT * FROM users WHERE 1=1');

while ($record = $result->fetch_assoc()) {

    echo "<pre>";
    print_r($record);
    echo "</pre>";
}
