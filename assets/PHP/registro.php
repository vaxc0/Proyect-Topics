<?php
	//conexion con la base de datos y el servidor
	require 'conexion.php';

	//obtenemos los valores del formulario
	$nombres = $_POST['nombresu'];
	$apellidos = $_POST['apellidosu'];
	$email = $_POST['emailu'];
	$pass = $_POST['contra'];
	$rpass = $_POST['recontra'];
	
	//se confirma la contraseña
	if ($pass != $rpass) {
		die('Las contraseñas no coinciden, Verifique <br /> <a href="../../registrarse.html">Volver</a>');
	}

	//se encripta la contraseña
	//$contraseñaUser = md5($pass);

	//ingresamos la informacion a la base de datos
	mysqli_query($link,"INSERT INTO datos VALUES('','$nombres','$apellidos','$email','$pass')") or die('<h2>Error Guardando los datos,Usuario ya registrado </h2> <a href="../../registrarse.html">Volver</a>');
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="../../Native.html";
		</script>
	'


?>