<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title> Mi Cuenta</title>
      <link rel="stylesheet" href="perfil-estilo.css">
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
         <form method="post">
            
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
                     <h6>
                     </h6>
                     <p class="proile-rating"> </p>
                     <ul class="nav nav-tabs" id="myTab" role="tablist" align="center">
                        <li class="nav-item">
                           <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sobre tu Cuenta</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3">
                  <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Editar Cuenta" align="right"/>
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
            <div class="col-md-8" >
               
                  
                     <div class="row">
                        <div class="col-md-4">
                           <label>Nombre</label>
                        </div>
                        <?php echo '<div class="col-md-8">'.$_SESSION["nombre"].'</div>'?>
                     </div>
                     <div class="row">
                        <div class="col-md-4">
                           <label>Email</label>
                        </div>
                        <?php echo '<div class="col-md-8">'.$_SESSION["email"].'</div>'?>
                     </div>
                     <div class="row">
                        <div class="col-md-4">
                           <label>Telefono</label>
                        </div>
                        <?php echo '<div class="col-md-8">'.$_SESSION["telefono"].'</div>'?>
                     </div>
                     <div class="row">
                        <div class="col-md-4">
                           <label>RFC </label>
                        </div>
                        <?php echo '<div class="col-md-8">'.$_SESSION["rfc"].'</div>'?>
                     </div>
                  
               
         </form>
         </div>
      </section>
   </body>
</html>