<?php
session_start();
include "db_conn.php";
?>
<!DOCTYPE HTML>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Direcciones</title>
      <link rel="stylesheet" href="perfil-estilo.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" href="navbar.css">
      
   </head>
   <body>
      <div class="header">
         <div class="menu">
            <a href="index.php" class="link">
               <div class="title">Inicio</div>
               <div class="bar"></div>
            </a>
            <a href="categorias.php" class="link">
               <div class="title">Categorias</div>
               <div class="bar"></div>
            </a>
            <a href="perfil.php" class="link">
               <div class="title">Mi Cuenta</div>
               <div class="bar"></div>
            </a>
         </div>
      </div>
      <section>
         <div class="container emp-profile">
            <div class="row">
                <div class="col-md-2 ">
                    <div class="profile-img" >
                       <img src="usericon.png" alt="" >
                       <div class="file btn btn-lg btn-primary">
                          Change Photo
                          <input type="file" name="file"/>
                       </div>
                    </div>
                 </div>
               <div class="col-md-6">
                  <div class="profile-head">
                     <h1 align="center">
                        Bienvenido de vuelta!
                     </h1>
                     
                     <p class="proile-rating"> </p>
                     <ul class="nav nav-tabs" id="myTab" role="tablist" align="center">
                        <li class="nav-item">
                           <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sobre tus direcciones</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3">
                  <form>
                  <button class="button-4" role="button" type="submit" formaction="Shipping.php">Añadir Nueva Dirección</button>
                  </form>
               </div>
            </div>
            <div class="row">
            <div class="col-md-2">
               <div class="profile-work">
                  <p>UTILERIA</p>
                  <a href="perfil.php">Mi Información</a><br/>
                  <a href="perfil-d.php">Direcciones</a><br/>
                  <a href="perfil-o.php">Historial de Pedidos</a><br/>
                  <p><a href="logout.php">CERRAR SESIÓN</a></p>
               </div>
            </div>
            <div class="col-md-8">
               <h6></h6>
               

            <?php
            $sql = "SELECT id_direccion,calle,numero_ext, colonia, ciudad, zip, estado, detalles 
            FROM DIRECCION where id_cliente=".$_SESSION["id"];
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
               // output data of each row
               while( $row = mysqli_fetch_assoc($result)) {

               $id = $row["id_direccion"];
               echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
               echo "<span>".$row["calle"]." #".$row["numero_ext"]."<br>".$row["colonia"].
               "<br>".$row["ciudad"].", ".$row["estado"]." ".$row["zip"]."<br>".$row["detalles"]."</span>";
                  echo "<a href='deldir.php?id=" . $row["id_direccion"] . "' id='btn'>Delete</a>";
               
               echo "</li>";
               }
            } else {
                  echo "0 resultados";
            }
            
            ?>
         </ul>
         
            

               
         </div>
      </section>
      <script>
         const ul = document.querySelector("ul.todos");
         
         //REMOVE TODO
            ul.addEventListener("click", (e) => {
            if (e.target.classList.contains("delete")) {
               e.target.parentElement.remove();
               e.target.
            }
            });
         </script>
   </body>
</html>