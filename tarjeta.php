<?php
session_start();
include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    
    <meta charset="UTF-8">
    <title> Doja Revistas</title>
    
    <link rel="stylesheet" href="EstiloPago.css">
    <script src="https://kit.fontawesome.com/javascript.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">
</head>

<body>
    <div class="header">
    <div class="menu">
      <a href="index.php" class="link">
        <div class="title">Inicio</div>
        <div class="bar"></div>
      </a>
      <a href="index.php" class="link">
        <div class="title">Categorias</div>
        <div class="bar"></div>
      </a>
      <a href="perfil.php" class="link">
        <div class="title">Mi Cuenta</div>
        <div class="bar"></div>
      </a>
    </div>
  </div>
    
    <div class="textBox">
        <h2 align="center"><span>Proceso de envío</span> </h2>
    </div>

<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">Dirección de envío</h3>

                <div class="inputBox">
                    <span>Nombre completo :</span>
                    <input type="text" placeholder="Carlos Rubio">
                </div>
                <div class="inputBox">
                    <span>Correo :</span>
                    <input type="email" placeholder="ejemplo@ejemplo.com">
                </div>
                <span>Direccion :</span>
                <select class='form-select' aria-label='Default select example' aria-placeholder="Selecciona tu direccion">;
                
                <?php
                
                
                $query = "Select calle,numero_ext,colonia,ciudad,zip,estado  FROM DIRECCION WHERE id_cliente=".$_SESSION["id"];
                
                
                $result = mysqli_query($conn, $query);
                
                
                if (mysqli_num_rows($result) > 0) {
                    while ($rows=mysqli_fetch_assoc($result)){
                        echo '<option value="'.$rows['calle'].'">'.$rows['calle']." ".$rows['numero_ext']." ".$rows['colonia'].'</option>';
                        
                    }
                } else {
                    echo "<option value=0Resultados></option>";
                    
              }
              
                

                
                
                
                /*<option value="2">Two</option>
                <option value="3">Three</option>*/
                echo "</select>";
                echo "<div class='inputBox'>
                <span>ciudad :</span>
                <input type='text' placeholder='Hermosillo'>
                </div>";

                echo " <div class='flex'>
                <div class='inputBox'>
                    <span>Estado :</span>
                    <input type='text' placeholder='Sonora'>
                </div>";

                echo" <div class='inputBox'>
                <span>Código Postal :</span>
                <input type='text' placeholder='83200'>
            </div>
        </div>"
                ?>
                
               

               
                   

            </div>

            <div class="col">

                <h3 class="title">Pago</h3>

                <div class="inputBox">
                    <span>Tarjetas aceptadas :</span>
                    <img src="card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Propietario de la tarjeta :</span>
                    <input type="text" placeholder="Carlos Rubio">
                </div>
                <div class="inputBox">
                    <span>Numero de tarjeta :</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>Fecha vencimiento :</span>
                    <input type="text" placeholder="Enero">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Año de vencimiento :</span>
                        <input type="number" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="Enviar" class="submit-btn">

    </form>

</div>    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>