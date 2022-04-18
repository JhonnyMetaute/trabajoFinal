<?php

$enlace = mysqli_connect("localhost","root","");
mysqli_select_db($enlace,"trabajoFinal");

$conn = new mysqli("localhost","root","","trabajoFinal");
			if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO informacion (id,Nombre,Informacion,imagen,tipo,uso,material,codex,plano,video)VALUES ('".$_POST['id']."', '".$_POST['Nombre']."', '".$_POST['Info']."','".$_POST['Imagen']."','".$_POST['Tipo']."','".$_POST['Uso']."','".$_POST['Materiales']."','".$_POST['Codex']."','".$_POST['Plano']."','".$_POST['Video']."')";

		if ($conn->query($sql) === TRUE) {
			header("Location: admin.php");
		} else {
			header("Location: admin.php");
		}

		$conn->close();

?>