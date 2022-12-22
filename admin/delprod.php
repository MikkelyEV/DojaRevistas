<?php
session_start();
include "../db_conn.php";
   
    $id=$_GET['id'];


            try {
                $sql2 = "DELETE FROM `PRODUCTO` WHERE id_producto=".$id;
                $result2 = mysqli_query($conn, $sql2);
			    header("Location:productos.php");
            } catch (\Throwable $th) {
                //throw $th;
            }
?>