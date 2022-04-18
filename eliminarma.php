<?php


$enlace = mysqli_connect("localhost","root","");
mysqli_select_db($enlace,"trabajoFinal");


$consulta = "DELETE FROM informacion WHERE nombre='".$_POST['N']."'";
$Respuesta = mysqli_query($enlace, $consulta);
mysqli_num_rows($Respuesta);
header("Location: admin.php");


?>
