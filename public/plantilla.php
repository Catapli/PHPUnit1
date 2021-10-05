<?php
use App\Player;
use App\Team;
$arxiu = fopen("plantilla.csv","r");
$lista[] = [];
$team = new Team("Atlético de Madrid");

while (($data = fgetcsv($arxiu)) == true) {
    if (filtrarPorEquipo($data[1])){
        $jugador = createPlayer($data);
        $team->SignPlayer($jugador);
        array_push($lista,$jugador);
    }
}
fclose($arxiu);
unset($lista[0]);

function filtrarPorEquipo($equipo){
    return $equipo == "Atlético de Madrid";
}




function createPlayer($data){
    $name = $data[4];
    $birthday = $data[6];
    $pais = $data[9];
    $posicion = $data[10];
    $dorsal = $data[11];
    $yellow = $data[18];
    $red = $data[19];
    $goles = $data[17];
    $matches = $data[12];
    $minutes = $data[16];
    return new Player($name,$birthday,$pais,$dorsal,$posicion,$goles,$matches,$minutes,$yellow,$red);
}





require_once("fitxers.view.php");