<?php 
	$conexion = mysqli_connect("localhost","root","","unvenezolanoenperu") or die("Error en la conexion");

	mysqli_query($conecion,"insert into suscription(email) values ('$_POST[email]')") or die("No se pudo registrar en la base de datos".mysqli_error($conexion));
?>