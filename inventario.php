<?php //Validacion de usuario
session_start();
if (isset($_SESSION['usuario'])){ 
		$loginSession=$_SESSION['usuario'];
		$tipoUsuario=$_SESSION['tipo'];
		
	} 
	else{
		$loginSession="";
	}
?>
<?php //Eliminar producto
include_once 'conexion.php';
if (isset($_GET['deleteId'])){
	$mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
	$sqlQuery="DELETE FROM lente WHERE Idlente = ".$_GET['deleteId'];
	$resultado=$mysqlConexion->query($sqlQuery);
	header("Location: $_SERVER[PHP_SELF]");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, mximum-scale=3.0, mximum-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/main.css">
    -->
    <title>Inventario|Visualook</title>
    <link rel="stylesheet" href="font/styles.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/admin.css">
    
    <script type="text/javascript">
	/*	function editarLente(id){
				if(confirm('¿Desea modificar?')){
					window.location.href='modificar.php?updateId='+id;
					
				}
			}*/
		function eliminarLente(id){
			if(confirm('¿Desea eliminar?')){
				window.location.href='inventario.php?deleteId='+id;
			}
		}
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
                <li class="menu__item"><a href="admin.php" class="menu__link ">Administrador</a></li>
                <li class="menu__item"><a href="inventario.php" class="menu__link menu__link--select">Inventario</a></li>
                <li class="menu__item"><a href="usuario.php" class="menu__link ">Usuario</a></li>
            </ul>
            <div class="social-icon">
                <a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
                <a href="" class="social-icon__link"><span class="icon-instagram"></span></a>
                <a href="" class="social-icon__link"><span class="icon-mail"></span></a>
            </div>
        </div>
    </nav>
    <section class="banner"> <img src="img/pi.jpg" alt="" class="banner__img"> </section>
    

    <main class="main">
        <br><br><br>
        <!--<form action="gl.php" method="post" class="form-register">
            <div class="logo"> <h1>VisuaLook</h1> <h2>Inventario.</h2> </div>
            <div class="lform"> <h2>Inventario.</h2> </div>
            <div class="contenedor-inputs">
                <input type="text" name="nombre" placeholder="Nombre" class="input-100" required>
                <input type="text" name="descripcion" placeholder="descripcion" class="input-100" required>
                <input type="text" name="tipo" placeholder="tipo" class="input-100" required>
                <input type="text" name="existencia" placeholder="existencia" class="input-100" required>
                <input type="text" name="precio" placeholder="precio" class="input-100" required>
                <input type="submit" value="Registrar" class="btn-enviar" required> 
            </div>
        </form>-->

        <table>
        <thead>
            <tr>
                <th colspan="7"><h2>Lista de productos</h2></th>
                <th colspan="1"><a href="admin.php" class="no_enlace">Nuevo +</a></th>
            </tr>
        </thead>
       
            <tr>
				<th>ID</th>
				<th>NOMBRE</th>
				<th>DESCRIPCION</th>
                <th>TIPO</th>
				<th>PRECIO</th>
				<th>EXISTENCIA</th>
                <th colspan="2">OPERACION</th>
                <!--<th>Eliminar</th>-->
			</tr>

            <?php
			    include_once 'conexion.php';
				$mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
				$sqlQuery="SELECT * FROM  lente";
				$resultado=$mysqlConexion->query($sqlQuery);
				while ($row=$resultado->fetch_assoc())
				{
				?>
					<tr>
						<td>	<?php  echo $row["Idlente"];?>	</td>
						<td>	<?php  echo $row["Nombre"];?>	</td>
						<td>	<?php  echo $row["Descripcion"];?>	</td>
				    	<td>	<?php  echo $row["Tipo"];?>	</td>
                        <td>	<?php  echo $row["Precio"];?>	</td>
                        <td>	<?php  echo $row["Existencia"];?>	</td>

                        
                       <td><a  class="no_enlace" href="modificar.php?id=<?php echo $row['Idlente']; ?>">Modificar</a></td>
                        
						<td align="center"><a class="no_enlace" href="javascript:eliminarLente('<?php echo $row["Idlente"]; ?>')">Eliminar</a></td>
						
					</tr>
				<?php 
				}
			?>
		</table>
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
