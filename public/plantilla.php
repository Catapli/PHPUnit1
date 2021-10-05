<?php
require_once ("../kernel.php");
use App\Player;
use App\Team;
use App\Trainer;
$arxiu = fopen("plantilla.csv","r");
$lista = [];
$team = new Team("Atlético de Madrid");

$trainer = new Trainer("Boss","Manuelcito","21/08/2020","Spain",5,4);
$team->SignPlayer($trainer);
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
loadView("fitxers",compact("team"));
