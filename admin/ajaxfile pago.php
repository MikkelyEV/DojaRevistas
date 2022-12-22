<?php 
include 'db_conn.php';

if (!empty($_POST["calle"])) {
    // Fetch state data based on the specific country 
    $sql = "SELECT ciudad,zip,estado FROM direccion WHERE calle='".$_POST["calle"]."'";
    $result = mysqli_query($conn, $sql);
    // Generate HTML of state options list 
    if (mysqli_num_rows($result) > 0)  {
        while ($row=mysqli_fetch_assoc($result)){
            
            echo "<div class='mb-2'>
            <span>ciudad :</span>
            <input type='text' value=".$row['ciudad'] ." class= 'form-control form-control-sm'>
            </div>";

            echo " <div class='flex'>
            <div class='inputBox'>
                <span>Estado :</span>
                <input type='text' value=".$row['estado'] ." class= 'form-control form-control-sm'>
            </div>";

            echo " <div class='inputBox'>
            <span>Código Postal :</span>
            <input type='text' value=".$row['zip'] ." class= 'form-control form-control-sm'>
            </div>";
       }
    }
}
?>