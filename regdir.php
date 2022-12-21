<?php
session_start();
include "db_conn.php";
   
    $id=$_SESSION['id'];
    $calle = ($_POST['calle']);
	$numero_ext = ($_POST['numero_ext']);
    $colonia = ($_POST['colonia']);
	$ciudad = ($_POST['ciudad']);
	$zip = ($_POST['zip']);
    $estado = ($_POST['estado']);
	$detalles = ($_POST['detalles']);

            try {
                $sql2 = "INSERT INTO DIRECCION(id_cliente,calle,numero_ext,colonia,ciudad,zip,estado,detalles) VALUES('$id','$calle','$numero_ext','$colonia','$ciudad','$zip','$estado','$detalles')";
                $result2 = mysqli_query($conn, $sql2);
                
			    header("Location:perfil-d.php");
            } catch (\Throwable $th) {
                //throw $th;
            }

            