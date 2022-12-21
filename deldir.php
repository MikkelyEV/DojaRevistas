<?php
session_start();
include "db_conn.php";
   
    $id=$_GET['id'];


            try {
                $sql2 = "DELETE FROM `DIRECCION` WHERE id_direccion='$id'";
                $result2 = mysqli_query($conn, $sql2);
			    header("Location:perfil-d.php");
            } catch (\Throwable $th) {
                //throw $th;
            }
?>