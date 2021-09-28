<?php
require_once ("../vistas/arrays.view.php");

function contarElementos($array){
    return count($array);
}

function convertirCadena($array){
    return implode(" ",$array);
}
function ordenar($array){
    asort($array);
    foreach ($array as $valor){
        echo "$valor".",";
    }
     return $array;
}

function ordenarInverso($array){
    $arrayInvertido = array_reverse($array);
    foreach ($arrayInvertido as $valor){
        echo "$valor".",";
    }
    echo "<br>";
    return $arrayInvertido;
}

function encontrarNombre($array){
    return array_search("Jordi",$array);
}

function mostrararray($array){
    echo "Lista completa array <br>";
    foreach ($array as $valor){
        echo $valor."<br>";
    }
}

function sacarColumna($array){
    $nombres = array_column($array,'nom');
    print_r($nombres);
}

function mostrarArrayAsociativo($array){
    foreach ($array as $name => $traduccion ){
        echo $name." => ".$traduccion."<br>";
    }
}
?>