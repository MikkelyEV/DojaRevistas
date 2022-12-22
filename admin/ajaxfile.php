<?php 
include 'db_conn.php';

if (!empty($_POST["nombre_producto"])) {
    // Fetch state data based on the specific country 
    $sql = "SELECT precio,descripcion FROM producto WHERE nombre_producto='".$_POST["nombre_producto"]."'";
    $result = mysqli_query($conn, $sql);
    // Generate HTML of state options list 
    if (mysqli_num_rows($result) > 0)  {
        while ($row=mysqli_fetch_assoc($result)){
        echo '<div class="row justify-content-between text-center">';
        echo '<div class="form-group col-sm-3 flex-column d-flex" style="margin-left:auto;margin-right:1%;display:block;margin-top:1%;margin-bottom:0%"> <label class="form-control-label px-3">Descripcion<span class="text-danger"> *</span></label> <input class="form-control input-lg" type="text" id="descripcion" name="descripcion" value="' . $row['descripcion'] . '" onblur="validate(4)"> </div>';
        echo '<div class="form-group col-sm-3 flex-column d-flex row" style="margin-left:1%;margin-right:auto;display:block;margin-top:1%;margin-bottom:0%"> <label class="form-control-label px-3">Importe<span class="text-danger"> *</span></label> <span> <input class="form-control input-lg" type="number" id="text" name="importe" value="' . $row['precio'] . '" onblur="validate(3)"> </span></div>';
        echo '</div>';
        }
    }
}
?>