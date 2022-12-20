<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "admin";
$dbname = "DOJADB";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
$alert= "";
if (!$conn) {
    die("no hay conexion:" . mysqli_connect_error());

}
session_start();

    $nombre = ($_POST['nombre']);
	$correo_electronico = ($_POST['correo_electronico']);
    $rfc = ($_POST['rfc']);
	$telefono = ($_POST['telefono']);
	$password = ($_POST['password']);

$sql = "SELECT * FROM clientes WHERE correo_electronico="+$correo_electronico ;
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$alert="Correo Electrónico en uso";
	        exit();
		}else {
           $sql2 = "INSERT INTO CLIENTES(nombre, correo_electronico, rfc,telefono,password) VALUES("+$nombre+","+$correo_electronico+','+$rfc+','+$telefono+','+$password+')';
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location:perfil.html");
	         exit();
           }else {
	           	$alert="Ocurrió un error inesperado";
		        exit();
           }
		}