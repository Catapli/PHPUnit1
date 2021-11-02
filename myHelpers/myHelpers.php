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

function comprobarEstrellas($nomCamp){
    if ($_POST[$nomCamp] >= 1 && $_POST[$nomCamp] <= 5){
        return trim(htmlspecialchars($_POST[$nomCamp]));

    }else{
        throw new App\Exceptions\RequiredField($nomCamp);
    }
}

function loadView($vista,$params){
    extract($params);
    require($_SERVER['DOCUMENT_ROOT'].'/../vistas/'.$vista.'.view.php');
}

function isLenght($nomCamp){
    if (strlen($_POST[$nomCamp]) >= 10 && strlen($_POST[$nomCamp]) <= 30) {
        return trim(htmlspecialchars($_POST[$nomCamp]));
    }
    else {
        throw new App\Exceptions\NoFitField($nomCamp);
    }
}

function coincidenPassword($campo1, $campo2){
    if ($_POST[$campo1] == $_POST[$campo2]){
        return trim(htmlspecialchars($_POST[$campo1]));
    }else{
        throw new App\Exceptions\passwordIsNotSame($campo1);
    }
}

function isRequired($nomCamp){
    if (!empty($_POST[$nomCamp])) {
        return trim(htmlspecialchars($_POST[$nomCamp]));
    }
    else {
        throw new App\Exceptions\RequiredField($nomCamp);
    }
}

function isImage($nomCamp,$type,$directorio){
    if ($_POST[$nomCamp]['type'] == $type) {
        $name = $_FILES[$nomCamp]['name'];
        if (move_uploaded_file( $_FILES['photo']['tmp_name'],"$directorio/".$name)){
            return $name;
        }
    }
    else {
        throw new App\Exceptions\isNotAnImageFile($nomCamp);
    }
}

function isNumeric($nomCamp){
    if (!is_numeric($_POST[$nomCamp])) {
        return trim(htmlspecialchars($_POST[$nomCamp]));
    }
    else {
        throw new App\Exceptions\NoNumericField($nomCamp);
    }
}

function cfsr(){
    if (parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) != $_SERVER['HTTP_HOST']) die('Anti-CSRF');
    else return true;
}