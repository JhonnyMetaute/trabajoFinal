<!--Jhonny Alexander Metaute Pérez-->
<!--C.C: 1041176975               -->
<!--jhonny.metaute@udea.edu.co    -->
<!--*********************************************-->


<!--Página:Registro de usuario-->

<!DOCTYPE HTML>
<html>

	<head>
		<title>Trabajo Final</title>
		<meta charset="utf-8">
		<meta name="author" content="Jhonny Metaute">
		<meta name="description" content="Ejercicios prácticos HTML5+CSS">
		<meta name="keywords" content="Ejercicios, Soluciones, Prácticas, HTML5">
		<link rel="stylesheet" type="text/css" href="Estilo.css">
	</head>

	<body>
		<header> <!--El header es similar en cada página-->
			<a href="inicio.php" ><img src="imagenes/logo.png" id="logo"></a>
			<hgroup>
				<h1 align="left">Máquinas de Leonardo Da Vinci.</h1>
				<h2 class="tagline">Registro de Usuario</h2> 
			</hgroup>
		</header>
		<nav>
			<ul> <!--Opciones subrayadas-->
				<?php
					session_start();
					if(!isset($_SESSION['auth'])){
						if(isset($_SESSION['admin'])){
					    print("<a href='inicio.php' class='Inicio'>Inicio<a/>");
						print("<a href='admin.php' class='Registro'>Admin</a>");
						print("<a href='maquinas.php' class='libre1'>Algunas Máquinas</a>");
						print("<a href='planos.php' class='libre2'>Planos de Construcción</a>");
						print("<a href='vid.php' class='libre3'>Videos de funcionamiento</a>");
						print("<a href='logout.php' class='Registro'>Logout</a>");
					   }else{
					   	print("<a href='inicio.php' class='Inicio'>Inicio<a/>");
						print("<a href='registro.php' class='Registro'>Login</a>");
						print("<a href='maquinas.php' class='libre1'>Algunas Máquinas</a>");
 
					   }
					}else{
						print("<a href='inicio.php' class='Inicio'>Inicio<a/>");
						print("<a href='maquinas.php' class='libre1'>Algunas Máquinas</a>");
						print("<a href='planos.php' class='libre2'>Planos de Construcción</a>");
						print("<a href='vid.php' class='libre3'>Videos de funcionamiento</a>");
						print("<a href='logout.php' class='Registro'>Logout</a>");
						if(isset($_SESSION['admin'])){
						print("<a href='admin.php' class='Registro'>Admin</a>");
						print("<a href='maquinas.php' class='libre1'>Algunas Máquinas</a>");
						print("<a href='planos.php' class='libre2'>Planos de Construcción</a>");
						print("<a href='vid.php' class='libre3'>Videos de funcionamiento</a>");
						print("<a href='logout.php' class='Registro'>Logout</a>");
					    }
					}

				?>
			</ul>
		</nav>
		<h1>Iniciar sesión o Registro de usuario</h1> <!--Se diseña el formulario para el registro del usuario-->

		<form name="formulario" action="login.php" method="post">
		<fieldset>
			<h1>Iniciar sesión</h1>
	 		<?php
			   if(isset($_GET['error'])){
				if($_GET['error']==1){
					print("<p class='error'>Verificar datos</p>");
				}else if($_GET['error']==2){
					print("<p class='error'>Debe iniciar sesion</p>");
				}
			}
			?>
			<label>Nombre</label><input type="text" name="user" required>
			<label>Contraseña</label><input type="password" name="pass" required><br><br>
			<input type="submit" name="enviar" value="Ingresar">
 		</fieldset>
		</form>

		<form name="formulario1" action="registrar.php" method="post">
		<fieldset>
			<h1>Registrar Nuevo Usuario</h1>
      <?php
			   if(isset($_GET['error'])){
				if($_GET['error']==4){
					print("<p class='error'>Usuario o Clave ya existen</p>");
				}
				if($_GET['error']==5){
					print("<p class='error'>Usuario creado</p>");
				}
				if($_GET['error']==6){
					print("<p class='error'>Error Base de datos</p>");
				}
			}
			?>
			<label>Nombre</label><input type="text" name="user1" required>
			<label>Contraseña</label><input type="password" name="pass1" required><br><br>
			<input type="submit" name="enviar" value="Registrar">
 		</fieldset>
		</form>

		<footer><!--El footer se repite en cada página-->
		    <p> <b>Name: </b>Jhonny Metaute  &nbsp;&nbsp; <b>Call: </b>3212690042 &nbsp;&nbsp; <b>Email: </b> jhonny.metaute@udea.edu.co &nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/logo2.png" width="5%" height="5%" /></p>
		</footer>

	</body>
</html>