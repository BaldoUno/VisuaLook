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
    <title>Inicio|Visualook</title>
    <link rel="stylesheet" href="font/styles.css">
    <link rel="stylesheet" href="css/styles.css">
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
                <li class="menu__item"><a href="index.php" class="menu__link menu__link--select">Inicio</a></li>
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
        <img src="img/banner.jpg" alt="" class="banner__img">
    </section>
    <br><a href="datos.php" class="btn--sus">Registrate</a> 
   
     <div class="social-login">
                 <?php 
					if($loginSession<>'')
					{
					?>
					    <p class="datosLogin"> <dd>Usuario: <?php echo $loginSession; ?></p>
					    <p></p><a href="salir.php" class="btn--sus">Cerrar sesión</a></P>
					<?php 								
					}
				?>
            </div>
       
    <main class="main">
        <section class="group group--color">
            <div class="container">
                <h2 class="main__title">Bienvenidos a su tienda</h2>
                <p class="main__txt">
                    Visualook es un empresa dedida a la venta de lentes, 20 años nos respaldan siendo la unica empresa con liderazgo en el mercado
                    lo que nos hace especial es que contamos con doctores especializados en el tema, dandole un mayor beneficio.                 
                </p>
            </div>
        </section>
        <section class="group main__about__description">
            <div class="container container--flex">
                <div class="column column--50">
                    <img src="img/img (1).jpg" alt="">
                </div>
                <div class="column column--50">
                    <h3 class="column__title">Los mejores lentes de chipas</h3>
                    <p class="column__txt">Nuestra empresa ha multiplicado su número de sucursales, sobre una plataforma sólida de crecimiento, contando con más de 120 tiendas propias que se encuentran ubicadas en los principales estados de la República Mexicana.
                        <a href="contacto.php" class="btn btn--contact">Contacto</a>
                    </p>
                </div>
            </div>
        </section>


        <section class="group today-special">
            <h2 class="group__title"><dd>Lentes de temporada</h2> <br>
            <div class="container container--flex">
                <div class="column column--50-25">
                    <?php
                    include_once 'conexion.php';
                    $mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
                    $sqlQuery="SELECT * FROM lente WHERE Idlente='1' ";
                    $resultado=$mysqlConexion->query($sqlQuery);
                    while ($row=$resultado->fetch_assoc()){
                    ?>
                        <a href="galeria.php"><img src="img/img (2).jpg" alt="" class="today-special__img" ></a>
                        <div class="today-special__title"><?php  echo $row["Nombre"];?></div>
                        <div class="today-special__price">$ <?php  echo $row["Precio"];?></div> <br>
                    <?php
                    }
                    ?>	
                </div>
                <div class="column column--50-25" > 
                    <?php
                    include_once 'conexion.php';
                    $mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
                    $sqlQuery="SELECT * FROM lente WHERE Idlente='2' ";
                    $resultado=$mysqlConexion->query($sqlQuery);
                    while ($row=$resultado->fetch_assoc()){
                    ?>
                        <a href="galeria.php"><img src="img/img (3).jpg" alt="" class="today-special__img"></a>
                        <div class="today-special__title"><?php  echo $row["Nombre"];?></div>
                        <div class="today-special__price">$ <?php  echo $row["Precio"];?></div> <br>
                    <?php
                    }
                    ?>	
                </div>
                <div class="column column--50-25">
                    <?php
                    include_once 'conexion.php';
                    $mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
                    $sqlQuery="SELECT * FROM lente WHERE Idlente='3' ";
                    $resultado=$mysqlConexion->query($sqlQuery);
                    while ($row=$resultado->fetch_assoc()){
                    ?>
                        <a href="galeria.php"><img src="img/img (4).jpg" alt="" class="today-special__img" ></a>
                        <div class="today-special__title"><?php  echo $row["Nombre"];?></div>
                        <div class="today-special__price">$ <?php  echo $row["Precio"];?></div> <br>
                    <?php
                    }
                    ?>	
                </div>
                <div class="column column--50-25">
                    <?php
                    include_once 'conexion.php';
                    $mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
                    $sqlQuery="SELECT * FROM lente WHERE Idlente='4' ";
                    $resultado=$mysqlConexion->query($sqlQuery);
                    while ($row=$resultado->fetch_assoc()){
                    ?>
                        <a href="galeria.php"><img src="img/img (5).jpg" alt="" class="today-special__img" ></a>
                        <div class="today-special__title"><?php  echo $row["Nombre"];?></div>
                        <div class="today-special__price">$ <?php  echo $row["Precio"];?></div> <br>
                    <?php
                    }
                    ?>	
                </div>	
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