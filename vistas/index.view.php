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
    <h2>
        <?php

        $greetins = 'Hola ';

        $name = $_GET['name'];

        echo $greetins.$name;
        ?>
    </h2>
</header>

</body>
</html>


