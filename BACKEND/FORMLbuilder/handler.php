<?php
// HTML builder
require('FormBuilder.php');


$attributes = [
    'class' => 'my-class',
    'id' => 'first'
];

$obj = new FormBuilder();
$obj->createElement('h2', 'Title2', $attributes);
$obj->createElement('p', 'Text');
$obj->createElement('p', 'Text2');
$obj->createElement('a', 'Link', ['href' => 'https://google.com']);
?>


<form action="" method="GET">
    <input type="text">
    <input type="text">
    <input type="text">
</form>