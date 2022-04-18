<!--Jhonny Alexander Metaute Pérez-->
<!--C.C: 1041176975               -->
<!--jhonny.metaute@udea.edu.co    -->
<!--*********************************************-->


<!--Página: Videos mostrando funcionamiento-->

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
		<header>
			<a href="inicio.php" ><img src="imagenes/logo.png" id="logo"></a>
			<hgroup>
				<h1 align="left">Máquinas de Leonardo Da Vinci.</h1>
				<h2 class="tagline">Funcionamiento</h2>
			</hgroup>
		</header>
		<nav>
			<ul>
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
			<article class="contenido">
				<ul>

					<?php
						   $mysqli = new mysqli("localhost","root","", "trabajofinal");
					       $query = "SELECT * FROM informacion";
					       if ($result = $mysqli->query($query)) {
							    while ($row = $result->fetch_assoc()) {
							      $video= $row["video"];
							      $nombre = $row["Nombre"];
							      print("<li><HR ALIGN='left' WIDTH='900px' color='black'></HR>");
							      print("<h2>".$nombre."</h2>");
					              print("<video src='".$video."'' controls></video>");
							      print("</li>");

							    }

								/*freeresultset*/
								$result->free();
					        }
						?>
					
				</ul>
			</article>
		</section>
		<footer>
		    <p> <b>Name: </b>Jhonny Metaute  &nbsp;&nbsp; <b>Call: </b>3212690042 &nbsp;&nbsp; <b>Email: </b> jhonny.metaute@udea.edu.co &nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/logo2.png" width="5%" height="5%" /></p>
		</footer>

	</body>
</html>