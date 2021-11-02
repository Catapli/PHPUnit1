<?php
require_once ("../kernel.php");
use \App\Connection;
use App\QueryBuilder;
use PDO;



$conn = \App\Connection::make();

$query = new QueryBuilder($conn);
$pdoST = $query->selectAll("alumnes");
$findDNI = $query->findByDni("alumnes","20933815C");




if (isPost() && cfsr() ){
    $campos = [];
    $dni = $_POST['dni'];
    $nom = $_POST['nom'];
    $fecha = $_POST['dataNaixement'];
    $sexo = $_POST['sexe'];
    $hobby = $_POST['hobby'];
    array_push($campos,$dni,$nom,$fecha,$sexo,$hobby);
    $query->insert('alumnes',$campos);
}else{
    require_once ("../vistas/form_persona_view.php");
}

echo "<br>";
echo "SELECT ALL";
foreach ($pdoST as $object){
    echo "<ul>";
    echo "<li>DNI: ".$object->dni.";  Name: ".$object->nom." "."; Data Naixement: ".$object->dataNaixement." "."; Sexe: ".$object->sexe."</li>";
    echo "</ul>";
}

foreach ($findDNI as $object){
    echo "<h2>Find By ID</h2>";
    echo "<h3>$object->dni</h3>";
}




