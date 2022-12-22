<?php
session_start();
include "../db_conn.php";
var_dump($_FILES);
    $filename = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name'];
    $folder = "../image/" . $filename;

    $nombre_producto = ($_POST['nombre_producto']);
	$descripcion = ($_POST['descripcion']);
    $categoria = ($_POST['categoria']);
	$precio = ($_POST['precio']);
	$frecuencia = ($_POST['frecuencia']);
    $Stock = ($_POST['stock']);

            try {
                $sql2 = "INSERT INTO PRODUCTO(nombre_producto,descripcion,categoria,precio,frecuencia,Stock,imagen) VALUES('$nombre_producto','$descripcion','$categoria','$precio','$frecuencia','$Stock','$filename')";
                $result2 = mysqli_query($conn, $sql2);

                if (move_uploaded_file($tempname, $folder)) {
                    header("Location:productos.php");
                } else {
                    header("Location:addproduct.php");
                }
			    
            } catch (\Throwable $th) {
                //throw $th;
            }

            