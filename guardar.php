<?php

    /*$nombre=$_POST['dnombre'];
    $usuario=$_POST['dcorreo'];
    $password=$_POST['dpassword'];
    if(empty($nombre)|| empty($usuario ||empty($password)))
    {
        header("Location: datos.php");
        exit();
    }
    include_once 'conexion.php';
    $mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
	$sqlQuery = "INSERT INTO usuario(NombreCompleto,usuario,Tipo,correo, Password) values ('$nombre','',2,'$usuario','$password') ";
	echo $sqlQuery;
     if($resultado=$mysqlConexion->query($sqlQuery))
    {
        header("Location:login.php");
    }
    else
    {
        echo $resultado;
    }*/
    
    $nombre=$_POST['dnombre'];
    $usuario=$_POST['dcorreo'];
    $password=$_POST['dpassword'];
    
    if(empty($nombre)|| empty($usuario ||empty($password)))
    {
        header("Location: datos.php");
        exit();
    }
    include_once 'conexion.php';
    $mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
    $sqlQuery="INSERT INTO usuario(NombreCompleto,Tipo,correo, Password)VALUES('$nombre','2','$usuario','$password')";
    echo $sqlQuery;
    if($resultado=$mysqlConexion->query($sqlQuery))
    {
        header("Location: login.php");
    }
    else
    {
        header("Location: datos.php");
        /*echo $resultado;*/
    }
?>