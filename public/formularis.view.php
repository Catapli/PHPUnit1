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

<form  method="POST" action="formularis.php">
    Operador numero 1: <input type="number" name="operador1"><br>
    Operador numero 2: <input type="number" name="operador2"><br>
    Operador:
    <input type="radio" name="operacion" value="suma">Sumar
    <input type="radio" name="operacion" value="resta">Restar
    <input type="radio" name="operacion" value="dividir">Dividir
    <input type="radio" name="operacion" value="multiplicar">Multiplicar<br>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

</body>

</html>





