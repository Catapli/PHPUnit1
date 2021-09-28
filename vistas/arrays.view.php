<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
    <style>
        header{
            background-color: blue;
            padding: 2em;
        }
    </style>
</head>
<body>
<header>
    <h2>

    </h2>

</header>
<?php


$array = ['Pepe','Jordi','Jose','Manu','Andres','Carlos'];
$cantidad =contarElementos($array);
echo "La cantidad de elementos es: ". $cantidad."<br>";
$convertirCadena = convertirCadena($array);
echo "La cadena convertida es: ".$convertirCadena."<br>";
echo "El array ordenado es => ";
$ordenarArray = ordenar($array);
echo "<br>";
echo "El Array invertido es => ";
$arrayInvertido = ordenarInverso($array);
$posicionNombre = encontrarNombre($array);
echo "Mi nombre se encuentra en la posicion $posicionNombre del array original<br>";
mostrararray($array);
$arrayAlumnes = array('Alumno 1' => array('dni' => '20933815C', 'nom' => 'Jordi', 'edat' => '20'),
        'Alumno 2' => array('dni' => '20948254C', 'nom' => 'Manu', 'edat' => '20'),
        'Alumno 3' => array('dni' => '20489561H', 'nom' => 'Jose', 'edat' => '17'));
echo "<br>TABLA CON LOS ALUMNOS<br>"
?>
<table>
    <tr>
        <td><?= $arrayAlumnes['Alumno 1']['nom']?></td>
        <td><?= $arrayAlumnes['Alumno 1']['dni']?></td>
        <td><?= $arrayAlumnes['Alumno 1']['edat']?></td>
    </tr>
    <tr>
        <td><?= $arrayAlumnes['Alumno 2']['nom']?></td>
        <td><?= $arrayAlumnes['Alumno 2']['dni']?></td>
        <td><?= $arrayAlumnes['Alumno 2']['edat']?></td>
    </tr>
    <tr>
        <td><?= $arrayAlumnes['Alumno 3']['nom']?></td>
        <td><?= $arrayAlumnes['Alumno 3']['dni']?></td>
        <td><?= $arrayAlumnes['Alumno 3']['edat']?></td>
    </tr>
</table>

<?php
echo "<br>";
sacarColumna($arrayAlumnes);
echo "<br>";
$arrayAsociatiu = array('Hola' => 'Hello',
    'Comida' => 'Food',
    'Hambriento' => 'Hungry',
    'Jugar' => 'Play',
    'Dormir' => 'Sleep',
    'Volar' => 'Fly',
    'Beber' => 'Drink',
    'Soñar' => 'Dream',
    'Vivir' => 'Living',
    'Saber' => 'Know');
mostrarArrayAsociativo($arrayAsociatiu);

?>


</body>

</html>





