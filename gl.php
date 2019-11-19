<?php
    
    $nombrep= $_POST['nombre'];
    $descripcionp= $_POST['descripcion'];
    $tipop = $_POST['tipo'];
    $existenciap = $_POST['existencia'];
    $preciop = $_POST['precio'];
    include_once 'conexion.php';
    $mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
    $sqlQuery = "INSERT INTO lente(Nombre,Descripcion, Tipo , Precio ,Existencia) values ('$nombrep','$descripcionp','$tipop','$preciop','$existenciap')";
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
