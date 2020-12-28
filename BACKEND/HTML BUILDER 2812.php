<?php

require('CLASSHtmlBuilder2812.php');


$attributes = [
    'class' => 'my-class',
    'id' => 'first'
];


$obj = new htmlBuilder();
$obj->createElement('h2', 'Title2', $attributes);
