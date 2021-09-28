<?php
require_once ("../kernel.php");

$errors = [];
if (isPost() && cfsr()){
    $X = isRequired('operador1', $errors);
    $Y = isRequired('operador2', $errors);
    $funcion = isRequired('operacion', $errors);
    $resultado = calcular($X, $Y, $funcion);

}else{
    require("formularis.view.php");
}
if (!count($errors)){
    require_once("formularis.view.php");
}

function isRequired($nomCamp, $errors){
    if (!empty($_POST[$nomCamp])){
        return trim(htmlspecialchars($_POST[$nomCamp]));
    }else{
        $errors[] = "El $nomCamp es necesario";
        return null;
    }
}

function isPost(){
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function cfsr(){
    if (parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) != $_SERVER['HTTP_HOST']) die('Anti-CSRF');
    else return true;
}


function suma($x, $y){
    return $x + $y;
}

function resta ($x, $y){
    return $x - $y;
}

function multiplicacion($x,$y){
    return $x*$y;
}

function division($x,$y){
    return $y?$x/$y:0;
}

function calcular($x,$y,$function){
    if (!$function){
        echo "La variable funcion esta vacía";
    }elseif ($function == "suma"){
        echo 'suma='.suma($x,$y);
    }elseif ($function == "resta"){
        echo 'resta='.resta($x,$y);
    }elseif ($function == "multiplicar"){
        echo 'multiplicacion='.multiplicacion($x,$y);
    }elseif ($function == "dividir"){
        echo 'division='.division($x,$y);
    }else{
        echo "La variable funcion no coincide con ninguna";
    }
}



