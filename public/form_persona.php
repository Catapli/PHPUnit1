<?php

require_once ("../kernel.php");
$errors = [];
if (isPost() && cfsr()){
    $X = isRequired('operador1', $errors);
    $Y = isRequired('operador2', $errors);
    $funcion = isRequired('operacion', $errors);
    $resultado = calcular($X, $Y, $funcion);

}else{
    loadView("formularis",compact("errors"));
}
if (!count($errors)){
    require_once("formularis.view.php");
}



loadView("form_persona",compact("nombre"));

