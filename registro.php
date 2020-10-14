<?php

	$conexion = msql_connect("localhost", "root", "", "usuarios");


	$dpi = $_POST['dpi'];
	$nombre = $_POST['nombre'];
	$numero = $_POST['numero'];
	$email = $_POST['e-mail'];
	$sexo = $_POST['sexo'];
	$edad = $_POST['edad'];
	$ciudad = $_POST['ciudad'];
	$pais = $_POST['pais'];

	echo $dpi;
	echo $nombre;
	echo $numero;
	echo $email;
	echo $sexo;
	echo $edad;
	echo $ciudad;
	echo $pais;

	mysl_query($conexion, "INSERT INTO suscritos('DPI', 'Nombre', 'Número', 'e-Mail', 'Sexo', 'Edad', 'Ciudad', 'País') VALUES ('$dpi','$nombre', '$numero', '$email', '$sexo', '$edad', '$ciudad', '$pais')");

	echo "Exito...";
	mysql_close($conexionc);

?>

