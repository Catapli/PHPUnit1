<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        header{
            background-color: gray;
            padding: 2em;
        }
    </style>
</head>
<body>
<header>

</header>
<?php
echo "<table>";
foreach ($lista as $key => $jugador) {
    echo "<tr>";
    echo "<td>".$jugador[4]."</td>";
    echo "<td>".$jugador[7]."</td>";
    echo "<td>".$jugador[9]."</td>";
    echo "<td>".$jugador[11]."</td>";
    echo "<td>".$jugador[10]."</td>";
    echo "<td>".$jugador[17]."</td>";
    echo "</tr>";
}
echo "</table>";

?>

</body>

</html>





