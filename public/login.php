<?php

require_once ('../kernel.php');
use \App\Connection;
use App\QueryBuilder;

$conn = Connection::make();

$query = new QueryBuilder($conn);
$campos = [];
$errors = [];

if (isPost() && cfsr()){

    try {
        $email = isRequired('email');
    }catch (\App\Exceptions\RequiredField $e){
        $errors[$e->getField()]= $e->getMessage();
    }

    try {
        $password =isRequired('password');
    }catch (\App\Exceptions\RequiredField $e){
        $errors[$e->getField()]= $e->getMessage();
    }

    if (!count($errors)){
        $user = $query->login('users',$email,$password);
        if ($user != null){
            $_SESSION['user'] = serialize($user);
            header("location:indexAct6.php");
            die();
        }
    }else{
        echo "HAY FALLo";
    }

}
require_once ("../vistas/login.view.php");
