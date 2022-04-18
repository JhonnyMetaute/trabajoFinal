<!--Jhonny Alexander Metaute Pérez-->
<!--C.C: 1041176975               -->
<!--jhonny.metaute@udea.edu.co    -->
<!--*********************************************-->
<!DOCTYPE HTML>
<html>

	<head> <!--Metadatos-->
		<title>Trabajo Final</title>
		<meta charset="utf-8">
		<meta name="author" content="Jhonny Metaute">
		<meta name="description" content="Ejercicios prácticos HTML5+CSS">
		<meta name="keywords" content="Ejercicios, Soluciones, Prácticas, HTML5">
		<link rel="stylesheet" type="text/css" href="Estilo.css"> <!--Se invoca al archivo css en cada página-->
	</head>
    
	<body> <!--Cuerpo de la página-->
		<header> <!--Espacio para el título del proyecto, el logo y título de la página-->
			<a href="inicio.php" ><img src="imagenes/logo.png" id="logo"></a> <!--el logo es una etiqueta a la página principal-->
			<hgroup>
				<h1 align="left">Máquinas de Leonardo Da Vinci.</h1>
				<h2 class="tagline">Información General</h2> <!--Título de la página principal -->
			</hgroup>
		</header>
		<nav> <!--Navegador de la página con referencia a las páginas secundarias-->
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
     
		<section>
		 <article class="Intro"> 
						<form name="formulario" action="eliminar.php" method="post">
							<h1>Eliminar Usuario</h1>
							<label>Nombre</label><input type="text" name="user2" required>
							<input type="submit" name="enviar" value="Eliminar">
						</form>
      
      </article>
      <article class="Intro">
      	<?php

		     $mysqli = new mysqli("localhost","root","", "trabajofinal");
					$query = "SELECT * FROM usuarios";
             $cont=0;
					if ($result = $mysqli->query($query)) {
              print("<h3>Usuarios Actuales:</h3>");
					    while ($row = $result->fetch_assoc()) {
					    	$cont++;
					        $name = $row["nombre"];
					        $pas= $row["password"];
					        print("<p><b>".$cont." Nombre: </b>".$name." <b>. Contraseña: </b>".$pas."</p>");
					    }

					/*freeresultset*/
					$result->free();
					}
			
      
      ?>
      </article>
      <article class="Objetivo">
				<form name="formulario" action="newmaquina.php" method="post">
							<h1>Ingresar Nueva Máquina</h1>
							<label>ID</label><input type="text" name="id" required><br>
							<label>Nombre</label><input type="text" name="Nombre" required><br>
							<label>Información</label><input type="text" name="Info" required><br>
							<label>Imágen</label><input type="text" name="Imagen" required><br>
							<label>Tipo</label><input type="text" name="Tipo" required><br>
							<label>Uso</label><input type="text" name="Uso" required><br>
							<label>Materiales</label><input type="text" name="Materiales" required><br>
							<label>Codex</label><input type="text" name="Codex" required><br>
							<label>Plano</label><input type="text" name="Plano" required><br>
							<label>Video</label><input type="text" name="Video" required><br>
							<input type="submit" name="enviar" value="Guardar">
						</form>
						<form name="formulario" action="eliminarma.php" method="post">
							<h1>Eliminar Máquina</h1>
							<label>Nombre</label><input type="text" name="N" required>
							<input type="submit" name="enviar" value="Eliminar">
						</form>
			</article>
		</section>

		<footer> <!--Información del Autor de la página-->
		    <p> <b>Name: </b>Jhonny Metaute  &nbsp;&nbsp; <b>Call: </b>3212690042 &nbsp;&nbsp; <b>Email: </b> jhonny.metaute@udea.edu.co &nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/logo2.png" width="5%" height="5%" /></p>
		</footer>
          
	</body>
</html>