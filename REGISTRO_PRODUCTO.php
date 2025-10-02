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

$COMPANY = $_REQUEST['empresa'];
$PRODUCT = $_REQUEST['producto'];
$BRAND = $_REQUEST['marca'];
$AMOUNT = $_REQUEST['cantidad'];
$EMAIL = $_REQUEST['email'];
$CITY = $_REQUEST['ciudad'];
$ADDRESS = $_REQUEST['direccion'];
$USER = $_REQUEST['usuario'];
$PASSWORD = $_REQUEST['psw'];
$REPEAT_PASSWORD = $_REQUEST['psw-repeat'];

$INSERTAR = "INSERT INTO `Producto`(`Empresa`, `Producto`, `Marca`, `Cantidad`, `Email`, `Ciudad`, `Dirección`, `Usuario`, `Contraseña`, `Repetir Contraseña`) VALUES ('$COMPANY','$PRODUCT','$BRAND','$AMOUNT','$EMAIL','$CITY','$ADDRESS','$USER','$PASSWORD')";

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
