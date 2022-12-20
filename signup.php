<?php
session_start();
include "db_conn.php";

    $nombre = ($_POST['nombre']);
	$correo_electronico = ($_POST['correo_electronico']);
    $rfc = ($_POST['rfc']);
	$telefono = ($_POST['telefono']);
	$password = ($_POST['password']);


		$sql = "SELECT * FROM CLIENTES WHERE correo_electronico='$correo_electronico'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$alert="Correo Electrónico en uso";
	        exit();
		}else {
           $sql2 = "INSERT INTO CLIENTES(nombre,correo_electronico,rfc,telefono,password) VALUES('$nombre','$correo_electronico','$rfc','$telefono','$password')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
				$_SESSION['email'] = $row['email'];
            	$_SESSION['nombre'] = $row['nombre'];
            	$_SESSION['id'] = $row['id_cliente'];
           	 header("Location:perfil.html");
	         exit();
           }else {
			

			header("Location:loginv2.html");
		        exit();
           }
		}