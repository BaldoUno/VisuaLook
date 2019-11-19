<?php
    session_start();
    if (isset($_SESSION['usuario'])){ 
    		$loginSession=$_SESSION['usuario'];
    		$tipoUsuario=$_SESSION['tipo'];
    	} 
    	else{
    		$loginSession="";
    	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, mximum-scale=3.0, mximum-scale=1.0">-->
    <title>Acerca|Visualook</title>
    <link rel="stylesheet" href="font/styles.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/nosotros.css">

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
                <li class="menu__item"><a href="contacto.php" class="menu__link">Contacto</a></li>
                <li class="menu__item"><a href="acerca.php" class="menu__link menu__link--select">Acerca de</a></li>
            </ul>
           
                       
            <div class="social-icon">
                <a href="https://www.facebook.com/" class="social-icon__link"><span class="icon-facebook"></span></a>
                <a href="https://www.instagram.com/" class="social-icon__link"><span class="icon-instagram"></span></a>
                <a href="https://mail.google.com/" class="social-icon__link"><span class="icon-mail"></span></a>
            </div>
        </div>
    </nav>
    <section class="banner">
        <img src="img/ima.jpg" alt="" class="banner__img">
        <div class="banner__content">Conocenos un poco...</div>
    </section>
    <main class="main">
        <section class="group group--color">
            <div class="container">
                <h2 class="main__title">Sobre Nosotros</h2>
                <p class="main__txt">Somos una óptica en expansión. <br>
                    Con más de 3 años de experiencia en el mercado,
                    en lo que hemos logrado  brindar calidad, confiabilidad
                    y satisfacción a nuestros clientes  en más de 20 ciudades
                    del país
                    <br>
                    Actualmente uno de los primeros nombres que vienen a la mente cuando hablamos de gafas es el de Ray Ban, esto se debe principalmente a que esta popular firma se ha consolidado como unos de los fabricantes de lentes más reconocido dentro de la industria de la moda y los accesorios de vestir.
                </p>
            </div>
        </section>
        <section class="group group--color">
            <div class="container">
                <h2 class="main__title">Mision</h2>
                <p class="main__txt"> Ofrecer soluciones integrales en el cuidado y conservación de la vista, con un alto sentido de profesionalismo y ética comercial
                </p>
            </div>
        </section>
        <section class="group group--color">
            <div class="container">
                <h2 class="main__title">Vision</h2>
                <p class="main__txt">Posicionarnos como el principal referente en el cuidado y prevención de la salud visual, resaltando la calidad y vanguardia de nuestros productos y servicios.
                </p>
            </div>
        </section>
        
    </main>

    <footer>
        <div class="main-footer">
            <div class="container container--flex">
                <div class="column column--33">
                    <h2 class="column__title">¿Por qué visitarnos?</h2>
                    <p class="column__txt">Nuestros ópticos le ayudaran a elegir la mejor selección. Productos nuevos y con garantía. Nuestras gafas o lentillas tienen precios más económicos que en la tienda. Damos la opción de recogida en tienda. Garantía de 2 años en todas nuestras gafas de sol, lentillas y gafas de visión.
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