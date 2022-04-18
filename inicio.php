<!--Jhonny Alexander Metaute Pérez-->
<!--C.C: 1041176975               -->
<!--jhonny.metaute@udea.edu.co    -->
<!--*********************************************-->
<?php #Se crea base de datos si no existe y sus respectivas tablas
	$enlace = mysqli_connect("localhost","root","");
    mysqli_select_db($enlace,"trabajoFinal");
    if(mysqli_select_db($enlace,"trabajoFinal")==FALSE){
      $conn = new mysqli("localhost", "root", "");
      $sql = "CREATE DATABASE trabajoFinal";
      $conn->query($sql);
      
      $conn = new mysqli("localhost", "root", "", "trabajoFinal");

		$sql = "CREATE TABLE usuarios (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(50) NOT NULL,
		password VARCHAR(50) NOT NULL
		)";
     $conn->query($sql);
     $conn->close();

     $conn = new mysqli("localhost", "root", "", "trabajoFinal");
     $sq2 = "CREATE TABLE admin (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(50) NOT NULL,
		password VARCHAR(50) NOT NULL
		)";
    $conn->query($sq2);
        $sq2 = "INSERT INTO admin (id,nombre, password)VALUES (null, 'Jhonny', '1041176975')";
        $conn->query($sq2);
		$conn->close();
		#Importar la tabla de las máquinas

						$conn =new mysqli('localhost', 'root', '' , 'trabajoFinal');

				$query = '';
				$sqlScript = file('informacion.sql');
				foreach ($sqlScript as $line)   {
				        
				        $startWith = substr(trim($line), 0 ,2);
				        $endWith = substr(trim($line), -1 ,1);
				        
				        if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
				                continue;
				        }
				                
				        $query = $query . $line;
				        if ($endWith == ';') {
				                mysqli_query($conn,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
				                $query= '';             
				        }
				} 
    }
?>


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

		<section> <!--Espacio para la informacíón general de la página principal, con etiquetas respectivas-->
			<article class="Intro">
				<p><q cite="https://www.medigraphic.com/cgi-bin/new/resumen.cgi?IDARTICULO=13289"><b><i>Leonardo di Ser Piero da Vinci</i></b> fue uno de los grandes maestros del Renacimiento, famoso como pintor, escultor, arquitecto, ingeniero y científico. Su profundo amor por el conocimiento y la investigación fue la clave de su comportamiento tanto artístico como científico</q></p>
				<p><q cite="https://www.medigraphic.com/cgi-bin/new/resumen.cgi?IDARTICULO=13289">Sus investigaciones científicas, sobre todo en las áreas de <b>anatomía, ingeniería, óptica e hidráulica</b> anticiparon muchos de los avances de la ciencia moderna.</q></p>
			</article>
			<figure class="Leo">
				<img src="imagenes/Leo.png" width="100%" height="100%" />
			</figure>
			<article class="Objetivo">
				<p><strong><b>El Objetivo</b> de esta páginas es mostrar al público algunas invenciones realizadas por este Gran maestro, con el fin de que puedan construir una réplica basándose en sus respectivos planos de construcción.</strong></p>
			</article>
		</section>

		<footer> <!--Información del Autor de la página-->
		    <p> <b>Name: </b>Jhonny Metaute  &nbsp;&nbsp; <b>Call: </b>3212690042 &nbsp;&nbsp; <b>Email: </b> jhonny.metaute@udea.edu.co &nbsp;&nbsp;&nbsp;&nbsp;<img src="imagenes/logo2.png" width="5%" height="5%" /></p>
		</footer>
          
	</body>
</html>