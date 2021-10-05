<?php
require_once ("../kernel.php");
$greetings = 'Hola'.$_GET['name'];
$features = [
    'name' => 'Jordi',
    'age' => '20',
    'glasses' => false,
    'profession' => 'student'
];

require_once("plantilla.php");

