<?php

$enlace = mysqli_connect("localhost","root","");
mysqli_select_db($enlace,"trabajoFinal");


$consulta = "SELECT * FROM usuarios WHERE nombre='".$_POST['user1']."' OR password='".$_POST['pass1']."'";
$Respuesta = mysqli_query($enlace, $consulta);

if (mysqli_num_rows($Respuesta)>0){
	header("Location: registro.php?error=4");
}else{
	$conn = new mysqli("localhost","root","","trabajoFinal");
			if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO usuarios (id,nombre, password)VALUES (null, '".$_POST['user1']."', '".$_POST['pass1']."')";

		if ($conn->query($sql) === TRUE) {
			header("Location: registro.php?error=5");
		} else {
			header("Location: registro.php?error=6");
		}

		$conn->close();
	
}

?>
