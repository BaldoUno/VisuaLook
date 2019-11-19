<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, mximum-scale=3.0, mximum-scale=1.0">-->
    <title>Inicio|Visualook</title>
    <link rel="stylesheet" href="font/styles.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <header class="main-header">
        <div class="container container--flex">
            <div class="logo-container column column--50">
                <h1 class="logo">VisuaLook</h1>
            </div>
            <div class="main-header__contactInfo column column--50">
                <p class="main-header__contactInfo__phone">
                    <span class="icon-telefono">9999-999-999</span>
                </p>
                <p class="main-header__contactInfo__address">
                    <span class="icon-ubicacion">Col.Teran Tuxtla GTZ</span>
                </p>
            </div>
        </div>
    </header>
    <nav class="main-nav">
        <div class="container container--flex">
            <span class="icon-menu" id="btnmenu"></span>
            <ul class="menu" id="menu">
                <li class="menu__item"><a href="index.php" class="menu__link ">Inicio</a></li>
                <li class="menu__item"><a href="nosotros.php" class="menu__link">Nosotros</a></li>
                <li class="menu__item"><a href="galeria.php" class="menu__link">Galeria</a></li>
                <li class="menu__item"><a href="contacto.php" class="menu__link">Contacto</a></li>
                <li class="menu__item"><a href="admin.php" class="menu__link menu__link--select">Administrador</a></li>
                <li class="menu__item"><a href="inventario.php" class="menu__link">Inventario</a></li>
                <li class="menu__item"><a href="usuario.php" class="menu__link">Usuario</a></li>
            </ul>
            <div class="social-icon">
                <a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
                <a href="" class="social-icon__link"><span class="icon-instagram"></span></a>
                <a href="" class="social-icon__link"><span class="icon-mail"></span></a>
            </div>
        </div>
    </nav>

    <section class="banner">
        <img src="img/pa.jpg" alt="" class="banner__img">
    </section>


    <section class="group main__about__description">
    <h2 class="group__title">Registro</h2>
            <div class="container container--flex">
                <div class="column column--50">
                <br>
                <form action="gl.php" method="post" class="form-register">
                    <div class="lform"><h2>Lentes.</h2></div>
                    <div class="contenedor-inputs">
                        <label for="uname"><b>Nombre</b></label>
                        <input type="text" name="nombre" placeholder="Nombre" class="input-100" required>
                        
                        <label for="uname"><b>Descripcion</b></label>
                        <input type="text" name="descripcion" placeholder="descripcion" class="input-100" required>
                        
                        <label for="uname"><b>Tipo</b></label>
                        <input type="text" name="tipo" placeholder="tipo" class="input-100" required>
                        
                        <label for="uname"><b>Existencia</b></label>
                        <input type="text" name="existencia" placeholder="existencia" class="input-100" required>
                        
                        <label for="uname"><b>Precio</b></label>
                        <input type="text" name="precio" placeholder="precio" class="input-100" required>
                        <input type="submit" value="Agregar" class="btn-enviar" required> 
                    </div>
                </form> <br><br>
                   
                </div>
                <div class="column column--50">
              
                <form action="gu.php" method="post" class="form-register">
                    <div class="lform"><h2>Usuarios.</h2></div>
                    <div class="contenedor-inputs">
                        <label for="uname"><b>Nombre Completo</b></label>
                        <input type="text" name="nombreu" placeholder="Nombre Completo" class="input-100" required >
                        
                        <label for="uname"><b>Usuario</b></label>
                        <input type="text" name="usuariou" placeholder="Usuario" class="input-100" required> 
                        
                        <label for="uname"><b>Tipo</b></label>
                        <input type="text" name="tipou" placeholder="Tipo" class="input-100" required >
                        
                        <label for="uname"><b>Correo</b></label>
                        <input type="text" name="correou" placeholder="Correo" class="input-100" required >
                        
                        <label for="uname"><b>Cntraseña</b></label>
                        <input type="text" name="contraseu" placeholder="Contraseña" class="input-100" required>
                        
                        <input type="submit" value="Agregar" class="btn-enviar" required value=""> 
                    </div>
                </form><br><br>
                </div>
            </div>
    </section>

    <!--
    <main class="main">
        <br>
        <form action="gl.php" method="post" class="form-register">
            <div class="lform"><h2>Registro|Inventario.</h2></div>
            <div class="contenedor-inputs">
                <input type="text" name="nombre" placeholder="Nombre" class="input-100" required>
                <input type="text" name="descripcion" placeholder="descripcion" class="input-100" required>
                <input type="text" name="tipo" placeholder="tipo" class="input-100" required>
                <input type="text" name="existencia" placeholder="existencia" class="input-100" required>
                <input type="text" name="precio" placeholder="precio" class="input-100" required>
                <input type="submit" value="Registrar" class="btn-enviar" required> 
            </div>
        </form>

        <br>
        <form action="gu.php" method="post" class="form-register">
            <div class="lform"><h2>Registro|Usuario.</h2></div>
            <div class="contenedor-inputs">
                <input type="text" name="nombreu" placeholder="Nombre Completo" class="input-100" required >
                <input type="text" name="usuariou" placeholder="Usuario" class="input-100" required> 
                <input type="text" name="tipou" placeholder="Tipo" class="input-100" required >
                <input type="text" name="correou" placeholder="Correo" class="input-100" required >
                <input type="text" name="contraseu" placeholder="Contraseña" class="input-100" required>
                <input type="submit" value="Guardar" class="btn-enviar" required value=""> 
            </div>
        </form>
    </main>

    -->

    <footer>
        <div class="main-footer">
            <div class="container container--flex">
                <div class="column column--33">
                    <h2 class="column__title">¿Por qué visitarnos?</h2>
                    <p class="column__txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita,
                        amet aperiam. Consequuntur suscipit officia dolore quasi modi placeat doloremque esse,
                        beatae nulla, alias quis deserunt cupiditate magnam cum facere recusandae!
                    </p>
                </div>
                <div class="column column--33">
                    <h2 class="column__title">Contactanos</h2>
                    <p class="column__txt">Col.Teran Tuxtla GTZ</p>
                    <p class="column__txt">Telefono: 9999-999-999</p>
                </div>
                <div class="column column--33">
                    <h2 class="column__title">Siguenos en nuestras redes</h2>
                    <p class="column__txt"><a href="" class="icon-facebook">Facebook</a></p>
                    <p class="column__txt"><a href="" class="icon-instagram">Siguenos en Instagram</a></p>
                    <p class="column__txt"><a href="" class="icon-mail">Escribenos a nuestro correo</a></p>
                </div>
                <p class="copy">2019 Visualook | Todos los derechos reservados</p>
            </div>
        </div>
    </footer>
    <script src="js/menu.js"></script>
</body>
</html>