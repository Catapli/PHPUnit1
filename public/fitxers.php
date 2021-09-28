<?php

$arxiu = fopen("plantilla.csv","r");
$lista[] = [];

while (($data = fgetcsv($arxiu)) == true) {
    if (filtrarPorEquipo($data[1])){
        array_push($lista,$data);
    }
}
fclose($arxiu);
unset($lista[0]);
ordenar($lista,11);
function filtrarPorEquipo($equipo){
    return $equipo == "Atlético de Madrid";
}



function ordenar($arrayAOrdenar,$fila, $orden = SORT_ASC){
    $arrAux = array();
    foreach ($arrayAOrdenar as $key=> $row) {
        $arrAux[$key] = is_object($row) ? $arrAux[$key] = $row->$fila : $row[$fila];
        $arrAux[$key] = strtolower($arrAux[$key]);
    }
    array_multisort($arrAux, $orden, $arrayAOrdenar);
}

require_once("fitxers.view.php");