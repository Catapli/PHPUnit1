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

        $i = $_GET['i'];

        $prefix = $_GET['prefix'];
        quitarEspacios($i);
        echo "<br>";
        variablePorDefecto($i);
        echo "<br>";
        contarLetras($i);
        echo "<br>";
        cadenaMayus($i);
        echo "<br>";
        cadenaMinus($i);
        echo "<br>";
        remplazar($i);
        echo "<br>";
        contarA($i);
        echo "<br>";
        posicionPrimeraA($i);
        echo "<br>";
        if ($prefix){
            comienzaPor($i,$prefix);
        }
        echo "<br>";
        $url = 'http://username:password@hostname:9090/path?arg=value';
        extraerDatosUrl($url);



        function extraerDatosUrl($cadena){
            echo " QueryString => ".parse_url($cadena,
                PHP_URL_QUERY);
            echo "<br>";
            echo "Protocolo utilitzat = ".parse_url($cadena,
                PHP_URL_SCHEME);
            echo "<br>";
            echo "Nom d'usuari = ".parse_url($cadena,
                PHP_URL_USER);
            echo "<br>";
            echo "Path = ".parse_url($cadena,
                PHP_URL_PATH);

        }

        function quitarEspacios($cadena){
            $resultado = trim($cadena,"/");
            echo $resultado;
        }

        function contarLetras($cadena){
            echo strlen($cadena);
        }

        function variablePorDefecto($cadena='Jordi'){
            echo $cadena;
        }

        function cadenaMayus($cadena){
            echo strtoupper($cadena);
        }

        function cadenaMinus($cadena){
            echo strtolower($cadena);
        }

        function remplazar($cadena){
            echo str_replace('o',0,$cadena);
        }

        function contarA($cadena){
            echo "se repite ".substr_count($cadena,"a")." veces<br>";
        }

        function posicionPrimeraA($cadena){
            echo  "Se encuentra en la ".stripos($cadena,'a')." posicion<br>";
        }

        function comienzaPor($cadena,$prefijo){
            $longitud = strlen($prefijo);
            $comparacion = substr($cadena,0,$longitud);
            if (strpos($comparacion,$prefijo) !== false ){
                echo "Empieza por ese prefijo";
            }else{
                echo "NO empieza por ese prefijo";
            }
        }




        ?>
    </h2>

</header>

</body>

</html>





