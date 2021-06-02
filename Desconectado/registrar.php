<?php
//conexion con la base de datos y el servidor

	
	$link = mysqli_connect("localhost","root","") or die("No se encuentra el servidor");
	$db = mysqli_select_db($link,"switchplays") or die("Error de Conexion");
	

	//obtenemos los valores del formulario
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$contraseña = $_POST['contraseña'];
	$rcontraseña = $_POST['rcontraseña'];

	//Obtiene la longitus de un string
	$req = (strlen($nombre)*strlen($correo)*strlen($contraseña)*strlen($rcontraseña)) or die("No se han llenado todos los campos");

	//se confirma la contraseña
	if ($contraseña != $rcontraseña) {
		die('Las contraseñas no coinciden, Verifique <br /> <a href="index.html">Volver</a>');
	}

	//se encripta la contraseña
	$contraseñaUser = md5($contraseña);

	//ingresamos la informacion a la base de datos
	mysqli_query($link, "INSERT INTO usuario VALUES('','$nombre','$correo','$contraseña')") or die("Error Guardando los datos");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="login.html";
		</script>
	'

?>