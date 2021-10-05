<?php

require_once ('../kernel.php');

function dd(...$variable){
     foreach ($variable as $var){
         var_dump($var);
         echo "<br/>";
     }
     die();
}

function isPost(){
    return ($_SERVER["REQUEST_METHOD"] === "POST");
}

function comprobarEstrellas($nomCamp, &$errors){
    if ($_POST[$nomCamp] >= 1 && $_POST[$nomCamp] <= 5){
        return trim(htmlspecialchars($_POST[$nomCamp]));

    }else{
        $errors[$nomCamp] = "El $nomCamp és requerit";
        return null;
    }
}

function loadView($vista,$params){
    extract($params);
    require($_SERVER['DOCUMENT_ROOT'].'/../vistas/'.$vista.'.view.php');
}

function isLenght($nomCamp,&$errors){
    if (strlen($_POST[$nomCamp]) >= 10 && strlen($_POST[$nomCamp]) <= 30) {
        return trim(htmlspecialchars($_POST[$nomCamp]));
    }
    else {
        $errors[$nomCamp] = "El $nomCamp tiene que tener entre 10 a 30 letras";
        return null;
    }
}

function coincidenPassword($campo1, $campo2, &$errors){
    if ($_POST[$campo1] == $_POST[$campo2]){
        return trim(htmlspecialchars($_POST[$campo1]));
    }else{
        $errors[$campo1] = "Les dues contraseñes tenen que coincidir";
        return null;
    }
}

function isRequired($nomCamp,&$errors){
    if (!empty($_POST[$nomCamp])) {
        return trim(htmlspecialchars($_POST[$nomCamp]));
    }
    else {
        $errors[$nomCamp] = "El $nomCamp és requerit";
        return null;
    }
}

function isImage($nomCamp,$type,$directorio,&$errors){
    if ($_POST[$nomCamp]['type'] == $type) {
        $name = $_FILES[$nomCamp]['name'];
        if (move_uploaded_file( $_FILES['photo']['tmp_name'],"$directorio/".$name)){
            return $name;
        }
    }
    else {
        $errors[$nomCamp] = "El archivo no se ha podido subir";
    }
}

function isNumeric($nomCamp,&$errors){
    if (!is_numeric($_POST[$nomCamp])) {
        return trim(htmlspecialchars($_POST[$nomCamp]));
    }
    else {
        $errors[$nomCamp] = "El $nomCamp és requerit";
        return null;
    }
}

function cfsr(){
    if (parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) != $_SERVER['HTTP_HOST']) die('Anti-CSRF');
    else return true;
}