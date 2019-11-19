<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, mximum-scale=3.0, mximum-scale=1.0">-->
    <title>Compra|Visualook</title>
    <link rel="stylesheet" href="font/styles.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/admin.css">
    <script>
 
	var fecha=new Date();
 
	
	// Sumamos los milisegundos que tiene una semana
	var laProximaSemana=new Date(fecha.getTime() + (24*60*60*1000)*7);

 
	//document.write("<br>La Fecha de la próxima semana es: "+laProximaSemana.getDate()+"/"+laProximaSemana.getMonth()+"/"+laProximaSemana.getFullYear());

 
	</script>
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
                <li class="menu__item"><a href="compra.php" class="menu__link menu__link--select">Compra</a></li>
                
            </ul>
            <div class="social-icon">
                <a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
                <a href="" class="social-icon__link"><span class="icon-instagram"></span></a>
                <a href="" class="social-icon__link"><span class="icon-mail"></span></a>
            </div>
        </div>
    </nav>
    <section class="banner"> <img src="img/pm.jpg" alt="" class="banner__img"> </section> 
    
    <main class="main">
        <br><br><br>
        <?php
            $id=$_REQUEST['id'];
			include_once 'conexion.php';
			$mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
			$sqlQuery="SELECT * FROM  lente WHERE Idlente='$id'";
			$resultado=$mysqlConexion->query($sqlQuery);
			$row=$resultado->fetch_assoc();
		?>
        <form action="ocompra.php" method="POST" class="form-register">
            <!--<div class="logo"> <h1>VisuaLook</h1> <h2>Inventario.</h2></div>-->
            <div class="lform"><h2>Compra.</h2></div>
            <div class="contenedor-inputs">
                <label for="uname"><b>Nombre</b></label>
                <input type="text" name="nombre" readonly ="readonly"placeholder="Nombre" class="input-100" required value="<?php echo  $row['Nombre']; ?>">
                
                <label for="uname"><b>Descripcion</b></label>
                <input type="text" name="descripcion" readonly ="readonly" placeholder="Descripcion" class="input-100" required value="<?php echo $row['Descripcion']; ?>"> 
                
                <label for="uname"><b>Tipo</b></label>
                <input type="text" name="tipo" readonly ="readonly" placeholder="Tipo" class="input-100" required value="<?php echo $row['Tipo']; ?>">
                
                <label for="uname"><b>Precio</b></label>
                <input type="text" name="precio"readonly ="readonly" placeholder="Precio" class="input-100" required value="<?php echo $row['Precio']; ?>">
                
                <label for="uname"><b>Fecha Pedido</b></label>
                <?php $fcha = date("Y-m-d");?>
                <input type="date" name="fechap" placeholder="Fecha pedido" readonly ="readonly" class="input-100" required value="<?php echo $fcha;?>" >
                
                <label for="uname"><b>Fecha Entrega</b></label>
                <input type="text" name="fechae" placeholder="Fecha entrega" readonly ="readonly" class="input-100" required value="<?php echo $fcha;?>" >
                
                
                <label for="uname"><b>Cantidad</b></label>
                <input type="text" name="cantidad" placeholder="cantidad" class="input-100" required >
                
                <label for="uname"><b>Direccion</b></label>
                <input type="text" name="direccion" placeholder="direccion" class="input-100" required>
            
                <input type="submit" value="Comprar" class="btn-enviar"> 
            
            </div>
        </form>
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
