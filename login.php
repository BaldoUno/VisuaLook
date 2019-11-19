<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stylesL.css">
    <title>Login</title>
</head>
<body>
    <div class="login-box">
        <img class="ilogin" src="img/Logo.png" alt="Logo de VisuaLook">
            <h1>Inicia sesión en VisuaLook.</h1>
        <form action="validar.php" method="POST">
            <label for="uname"><b>Correo</b></label>
            <input type="text" placeholder="Correo" name="correo" required>
            <br>
            <label for="uname"><b>Contraseña</b></label>
            <input type="password" placeholder="Contraseña" name="password"  required> 
            <br>
            <input type="submit" value="Iniciar sesión">
            <br>
            <a href="#">¿Olvidaste tu cuenta?</a><br><br>
            <a href="datos.php">Registrarse</a>
        </form>
    </div>
</body>
</html>