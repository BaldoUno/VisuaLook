<?php
   
    $usuario=$_POST['Idusuario'];
    $producto=$_POST['Idlente'];
    
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];
    $fechape=$_POST['fechap'];
    $fechaen=$_POST['fechae'];
    $domicilio=$_POST['direccion'];
    
    include_once 'conexion.php';
    $mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
    $sqlQuery="INSERT INTO pedido(IdUsuario,Idlente,Precio,Cantidad,FechaPedido,FechaEntregado,DomicilioEntrega)VALUES('22','22','$precio','$cantidad','$fechape','$fechaen,'$domicilio')";
    if($resultado=$mysqlConexion->query($sqlQuery))
    {
        header("Location: galeria.php");
    }
    else
    {
         /*header("Location:galeria.php");*/
        echo $resultado;
    }
?>
