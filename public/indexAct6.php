<?php

require_once ('../kernel.php');
use \App\Connection;
use App\QueryBuilder;

$conn = Connection::make();

$query = new QueryBuilder($conn);
$errors=[];

$id = rand(1,6);
$word = $query->findWord("palabras",$id);

if (!isset($_SESSION['user'])){
    header('location:/login.php');
    die();
}


if (!isset($_SESSION['ofegat'])){
    $ofegat = new App\Ofegat($word->palabra);
    $intentsValids = 0;
}else{
    $intentsValids = $_SESSION['intentsValids'];
    $ofegat = unserialize($_SESSION['ofegat']);
}


if (isPost() && cfsr()){
    try {
        $intentsValids += $ofegat->addLetter($_POST['letter']);
    }catch (Exception $e){
        $errors[] = $e->getMessage();
    }
    if ($intentsValids < 6){
        $juego = $ofegat->render();
        if ($juego == 1){
            require_once ("../vistas/win.view.php");
        }else{
            $_SESSION['intentsValids'] = $intentsValids;
            $_SESSION['ofegat'] = serialize($ofegat);
            require_once ("../vistas/indexAct6.view.php");
        }

    }else{
        require_once ("../vistas/win.view.php");
    }
}else{
  $ofegat->render();
  $_SESSION['intentsValids'] = $intentsValids;
  $_SESSION['ofegat'] = serialize($ofegat);
  require_once ("../vistas/indexAct6.view.php");
}

