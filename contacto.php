<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, mximum-scale=3.0, mximum-scale=1.0">-->
    <title>Contacto|Visualook</title>
    <link rel="stylesheet" href="font/styles.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/nos.css">
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
                <?php 
    				if($loginSession<>'' && $tipoUsuario=='1')  //Valida si hay usuario logueado y si es el administrador- solo asi podra visualizarse
    				{
    					?>
    				        <li class="menu__item"><a href="../admin.php" class="menu__link">Administrador</a></li>
    				        <li class="menu__item"><a href="../pedido.php" class="menu__link">Pedidos</a></li>
    					<?php 								
    				}
    			?>
    		    <?php 
					if($loginSession<>'') //Valida si hay usuario logueado para visualizar
					{
					?>
				       <li class="menu__item"><a href="../galeria.php" class="menu__link">Galeria</a></li>
					<?php 								
					}
				?>						
                <li class="menu__item"><a href="contacto.php" class="menu__link menu__link--select">Contacto</a></li>
                <li class="menu__item"><a href="acerca.php" class="menu__link">Acerca de</a></li>
            </ul>
           
                       
            <div class="social-icon">
                <a href="https://www.facebook.com/" class="social-icon__link"><span class="icon-facebook"></span></a>
                <a href="https://www.instagram.com/" class="social-icon__link"><span class="icon-instagram"></span></a>
                <a href="https://mail.google.com/" class="social-icon__link"><span class="icon-mail"></span></a>
            </div>
        </div>
        
    </nav>

    <section class="banner">
        <img src="img/bc.jpg" alt="" class="banner__img">
        <div class="banner__content">Déjanos un mensaje</div>
    </section>
    <main class="main">
        <section class="group contact">
            <h2 class="group--title">Contáctanos</h2>
            <div class="container container--flex">
                <div class="contact-information column column--50">
                    <h3 class="column__title">Información de contacto</h3>
                    <p class="column__txt">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, eligendi doloremque a nesciunt aliquam unde ipsum ab excepturi nam.
                    </p>
                    <p class="column__txt"> <span class="icon-telefono"></span> 9613302134</p>
                    <p class="column__txt"> <span class="icon-telefono"></span> 9614499406</p>
                    <p class="column__txt"> <span class="icon-ubicacion"></span> Col.Teran Tuxtla GTZ</p>
                    <p class="column__txt"> <span class="icon-mail"></span> visuallook@ventas.com</p>
                    <div class="social-icon2">
                        <a href="" class="social-icon__link2"><span class="icon-facebook"></span></a>
                        <a href="" class="social-icon__link2"><span class="icon-instagram"></span></a>
                        <a href="" class="social-icon__link2"><span class="icon-mail"></span></a>
                    </div>
                </div>
                <form action="" method="post" class="formulario column column--50">
                    <label for="" class="formulario__label">Nombre:</label>
                    <input type="text" class="formulario__input-txt" name="nombre" required > 

                    <label for="" class="formulario__label">Correo:</label>
                    <input type="text" class="formulario__input-txt" name="correo" required>

                    <label for="" class="formulario__label">Telefono:</label>
                    <input type="text" class="formulario__input-txt" name="telefono" required>

                    <label for="" class="formulario__label">Mensaje:</label>
                    <textarea name="" id="mensaje" cols="30" rows="10" class="formulario__textarea"></textarea>
                    <input type="submit" class="btn formulario__btn" value="Enviar">

                </form>
            </div>
        </section>
    </main>
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