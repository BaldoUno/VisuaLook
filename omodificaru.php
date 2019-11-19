<?php
    $id=$_REQUEST['id'];
    $nombreu= $_POST['nombre'];
    $usuariou= $_POST['usuario'];
    $tipou = $_POST['tipo'];
    $correou = $_POST['correo'];
    $contrau = $_POST['contrase'];
    
    include_once 'conexion.php';
    $mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
    $sqlQuery= "UPDATE usuario SET nombrecompleto='$nombreu', usuario='$usuariou', tipo='$tipou', correo='$correou', password='$contrau' WHERE Idusuario='$id'";
    if($resultado=$mysqlConexion->query($sqlQuery))
    {
        header("Location:usuario.php");
    }
    else
    {
         /*header("Location:login.php");*/
        echo $resultado;
    }
?>