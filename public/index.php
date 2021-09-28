<?php
require_once ("../kernel.php");
$greetings = 'Hola'.$_GET['name'];
$features = [
    'name' => 'Jordi',
    'age' => '20',
    'glasses' => false,
    'profession' => 'student'
];
$features['team'] = '2DAW';

require_once("fitxers.php");

