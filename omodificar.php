<?php
    $id=$_REQUEST['id'];
    $nombrep= $_POST['nombre'];
    $descripcionp= $_POST['descripcion'];
    $tipop = $_POST['tipo'];
    $existenciap = $_POST['existencia'];
    $preciop = $_POST['precio'];
    
    include_once 'conexion.php';
    $mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
    $sqlQuery= "UPDATE lente SET Nombre='$nombrep', Descripcion='$descripcionp',Tipo='$tipop', Existencia='$existenciap', Precio='$preciop' WHERE Idlente='$id'";
    if($resultado=$mysqlConexion->query($sqlQuery))
    {
        header("Location:inventario.php");
    }
    else
    {
         /*header("Location:login.php");*/
        echo $resultado;
    }
?>
