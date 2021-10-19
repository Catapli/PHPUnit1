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

<form  method="POST" action="conexiónBD.php" ><br>
    DNI: <input type="text" required name="dni"><br>
    Nom: <input type="text" required name="nom"><br>
    Data naixement : <input type="date" name="dataNaixement" > <br>
    Sexe:<br>
    <input type="checkbox" id="opcion1" name="sexe" value="1">
    <label for="opcion1"> Hombre</label><br>
    <input type="checkbox" id="opcion2" name="sexe" value="2">
    <label for="opcion2">Mujer</label><br>
    <input type="checkbox" id="opcion3" name="sexe" value="3">
    <label for="opcion3"> Otro..</label><br>
    <select id="hobbies" name="hobby">
        <?php
        $hobbies = array('Pescar', 'Escalar', 'Correr','Pasear','Videojuegos');
        $i = 0;
        foreach ($hobbies as $hobby){
            $i++;
        ?> <option value=<?=$i?>><?=$hobby?></option>
        <?php }?>
    </select><br>

    <button type="submit" class="btn btn-primary">Enviar</button>

</form>

</body>

</html>





