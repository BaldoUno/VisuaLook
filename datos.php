<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="css/stylesr.css">-->
    <link rel="stylesheet" href="css/newdatos.css">
    <title>Registro</title>
</head>
<body>
        
   <!-- <form action="validardatos.php" method="post" class="form-register" onsubmit="return vali();">-->
    <form action="rusuario.php" class="form-register"  method="post">
        <div class="logo">
            <h1>VisuaLook</h1>
            <h2 class="btn-logo">Regístrate para comprar lentes.</h2>
        </div>
        <div class="contenedor-inputs">
            <label for="uname"><b>Nombre</b></label>
            <input type="text" name="nusuario" placeholder="Nombre completo" class="input-100" required>
            
            <label for="uname"><b>Usuario</b></label>
            <input type="text" name="uname" placeholder="Usuario" class="input-100" required>
            
            <label for="uname"><b>Correo</b></label>
            <input type="text" name="cusuario" placeholder="Correo electrónico" class="input-100" required>
            
            <label for="uname"><b>Contraseña</b></label>
            <input type="password" name="psw" placeholder="Contraseña" class="input-100" required>
            
            <input type="submit" value="Registrarte" class="btn-enviar" required> 
            
            
        </div>
    </form>
    <br>
    <div class="foot">
        <p class="form__link"> <br> ¿Tienes una cuenta?<a class="letra" href="login.php"> Inicia Sesión <br> </a><br> </p>
    </div>
</body>
</html>