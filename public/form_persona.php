<?php

require_once ("../kernel.php");
$hobbies = array('Pescar', 'Escalar', 'Correr','Pasear','Videojuegos');
$nombre =  $_POST['nombre'];
loadView("form_persona",compact("nombre"));

