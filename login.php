<?php


$enlace = mysqli_connect("localhost","root","");
mysqli_select_db($enlace,"trabajoFinal");



$consulta = "SELECT * FROM usuarios WHERE nombre='".$_POST['user']."' AND password='".$_POST['pass']."'";
$Respuesta = mysqli_query($enlace, $consulta);

if (mysqli_num_rows($Respuesta)>0){
	print("ok<br>");
	session_start();
	$_SESSION['user'] = $_POST['user'];
	$_SESSION['auth'] = true;
	header("Location: maquinas.php?error=4");
    
}else{
	$consulta = "SELECT * FROM admin WHERE nombre='".$_POST['user']."' AND password='".$_POST['pass']."'";
    $Respuesta = mysqli_query($enlace, $consulta);
    if (mysqli_num_rows($Respuesta)>0){
    	session_start();
    	$_SESSION['admin'] = true;
    	header("Location: maquinas.php");
    }else{
	header("Location: registro.php?error=1");
    }
}

?>