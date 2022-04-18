<?php

$enlace = mysqli_connect("localhost","root","");
mysqli_select_db($enlace,"trabajoFinal");


$consulta = "DELETE FROM usuarios WHERE nombre='".$_POST['user2']."'";
$Respuesta = mysqli_query($enlace, $consulta);
mysqli_num_rows($Respuesta);
header("Location: admin.php");


?>
