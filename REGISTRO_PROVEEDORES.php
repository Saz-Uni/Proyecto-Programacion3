<?php

$HOSTNAME = "sql303.infinityfree.com";
$USERNAME = "if0_39829196";
$PASSWORDBS = "El962yXzAZLM";
$DBNAME = "if0_39829196_Programm3";


$CONEXION = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORDBS,$DBNAME);
if (!$CONEXION) {

	echo "<script type= 'text/javascript'>";
	echo "alert('Error al conectar la BS...')";
	echo "window.location.href='https://saz-uni.github.io/Proyecto-Programacion3/home.html'";
	echo "</script>";

}else{

	echo "<script type= 'text/javascript'>";
	echo "alert('Conexion exitosa a la BS...')";
	echo "</script>";

}

$NAME_AND_LAST_NAME = $_REQUEST['Nombres-Y-Apellidos'];
$COMPANY = $_REQUEST['empresa'];
$DOCUMENT = $_REQUEST['Documento'];
$NUMBER_NIT = $_REQUEST['Ndocumento'];
$EMAIL = $_REQUEST['email'];
$CITY = $_REQUEST['ciudad'];
$ADDRESS = $_REQUEST['direccion'];
$USER = $_REQUEST['usuario'];
$PASSWORD = $_REQUEST['psw'];
$REPEAT_PASSWORD = $_REQUEST['psw-repeat'];

$INSERTAR = "INSERT INTO `PROVEEDORES`(`Nombres Y Apellidos`, `Empresa`, `Documento`, `Numero NIT`, `Email`, `Ciudad`, `Dirección`, `Usuario`, `Contraseña`, `Repetir Contraseña`) VALUES ('$NAME_AND_LAST_NAME','$COMPANY','$DOCUMENT','$NUMBER_NIT','$EMAIL','$CITY','$ADDRESS','$USER','$PASSWORD')";

$RESULTADO = mysqli_query($CONEXION, $INSERTAR)

if (!$RESULTADO) {

	echo "<script type= 'text/javascript'>";
	echo "alert('Error al registrarse en la BS...')";
	echo "window.location.href='https://saz-uni.github.io/Proyecto-Programacion3/home.html'";
	echo "</script>";

}else{

	echo "<script type= 'text/javascript'>";
	echo "alert('Registro exitoso a la BS...')";
	echo "</script>";

}


?>
