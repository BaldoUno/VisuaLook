<?php
    $nombre=$_POST['nusuario'];
    $uname=$_POST['uname'];
    $usuario=$_POST['cusuario'];
    $password=$_POST['psw'];
    /*if(empty($nombre)|| empty($usuario ||empty($password)))
    {
        header("Location:registro.php");
        exit();
    }*/
    include_once 'conexion.php';
    $mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
    $sqlQuery="INSERT INTO usuario(nombrecompleto,usuario,tipo,correo,password)VALUES('$nombre','$uname','2','$usuario','$password')";
    /*echo $sqlQuery;*/
    if($resultado=$mysqlConexion->query($sqlQuery))
    {
        header("Location:login.php");
    }
    else
    {
         /*header("Location:login.php");*/
        echo $resultado;
    }
?>