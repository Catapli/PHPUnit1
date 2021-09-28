<?php



$x = $_GET['x'];

$y = $_GET['y'];

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
    return $x/$y;
}

function calcular($x,$y,$function){
    if (!$function){
        echo "La variable funcion esta vacía";
    }elseif ($function == "suma"){
        echo 'suma='.suma($x,$y) ;
    }elseif ($function == "resta"){
        echo 'resta='.resta($x,$y);
    }elseif ($function == "multiplicacio"){
        echo 'multiplicacion='.multiplicacion($x,$y);
    }elseif ($function == "divisio"){
        echo 'division='.division($x,$y);
    }else{
        echo "La variable funcion no coincide con ninguna";
    }
}


require_once ("../vistas/calculadora.view.php");

?>