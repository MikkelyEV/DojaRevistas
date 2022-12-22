<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['logemail']) && isset($_POST['logpassword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['logemail']);
	$pass = validate($_POST['logpassword']);

	if (empty($email)) {
		header("Location: loginv2.html?error=Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: loginv2.html?error=Password is required");
	    exit();
	}else{
		// hashing the password

         

        
		$sql = "SELECT * FROM CLIENTES WHERE correo_electronico='$email' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['correo_electronico'] === $email && $row['password'] === $pass) {
				if($row['correo_electronico'] === "admin@gmail.com" && $row['password']==="admin"){
					$_SESSION['email'] = $row['correo_electronico'];
            		$_SESSION['nombre'] = $row['nombre'];
            		$_SESSION['id'] = $row['id_cliente'];
					$_SESSION['telefono'] = $row['telefono'];
					$_SESSION['rfc'] = $row['rfc'];
            		header("Location: admin/productos.php");
		        	exit();
				}else{
					$_SESSION['email'] = $row['correo_electronico'];
            		$_SESSION['nombre'] = $row['nombre'];
            		$_SESSION['id'] = $row['id_cliente'];
					$_SESSION['telefono'] = $row['telefono'];
					$_SESSION['rfc'] = $row['rfc'];
            		header("Location: categorias.php");
		        	exit();
				}
            	
            }else{
				header("Location: loginv2.html?error=Incorect Email or password");
		        exit();
			}
		}else{
			header("Location: loginv2.html?error=Incorect Email or password");
	        exit();
		}
	}
	
}else{
	header("Location: logiv2.html");
	exit();
}