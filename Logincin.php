<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "DOJADB";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
$alert= "";
if (!$conn) {
    die("no hay conexion:" . mysqli_connect_error());

}
$email = $_POST["logemail"];
$pass = $_POST["logpassword"];

$query = mysqli_query($conn, "SELECT * FROM CLIENTES WHERE correo_electronico='" . $email . "' and password='" . $passw . "'");
$nr = mysqli_num_rows($query);
if ($email=="admin@gmail.com"){
    header("Location:../productos.php");
}else{
    if ($nr==0) {
        echo $nr;
        echo "ingreso";
        header("Location:index.php");
        //header("Location:perfil.php");
    }elseif($nr==1){
        header("Location:loginv2.html");
    }
    
}




?>