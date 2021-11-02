<?php
require_once ('../kernel.php');
use App\Connection;
use App\QueryBuilder;
use PDO;

$conn = Connection::make();
$query = new QueryBuilder($conn);
$campos = [];
$errors = [];



if (isPost() && cfsr()){

    try {
        $name = isRequired('usuario');
    }catch (App\Exceptions\RequiredField $e){
        $errors[$e->getField()]= $e->getMessage();
    }

    try {
        $email = isRequired('email');
    }catch (\App\Exceptions\RequiredField $e){
        $errors[$e->getField()]= $e->getMessage();
    }

    try {
        $password = coincidenPassword('password','comprobarPassword');
    }catch (\App\Exceptions\passwordIsNotSame $e){
        $errors[$e->getField()]= $e->getMessage();
    }


    if (!count($errors)){
        $query->insert('users',compact('name','email','password'));
        require_once ("login.php");
    }else{
        require_once ("../vistas/register.view.php");
    }
}else{
    require_once ("../vistas/register.view.php");
}
