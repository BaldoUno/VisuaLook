<?php
    $nombreu = $_POST['nombreu'];
    $usuariou = $_POST['usuariou'];
    $tipou = $_POST['tipou'];
    $correou = $_POST['correou'];
    $contraseu = $_POST['contraseu'];

    include_once 'conexion.php';
    $mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
    $sqlQuery="INSERT INTO usuario(nombrecompleto,usuario,tipo,correo,password)VALUES('$nombreu','$usuariou','$tipou','$correou','$contraseu')";
    if($resultado=$mysqlConexion->query($sqlQuery))
    {
        header("Location:admin.php");
    }
    else
    {
         /*header("Location:login.php");*/
        echo $resultado;
    }
?>