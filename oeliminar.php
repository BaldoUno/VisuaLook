<?php
    include("conexion.php");
    $id=$_REQUEST['id'];
    
    $query = "DELETE FROM lente WHERE Idlente='$id'";
    $resultado=$conexion->query($query);
    if($resultado){
        /*echo "Insercion Existosa";*/
        /*echo ' <script>
        alert("Registro exitosamente");
        </stript>';
        header("location: admin.php");
        exit;*/
        header("location: inventario.php");
    }else{
        echo "Insercion Fallida";
        /*echo '<script>
            alert("Error, Revise bien los datos");
        </script>';
        header("location: admin.php");
        exit;*/
    }
?>