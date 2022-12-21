
<!DOCTYPE HTML>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Direcciones</title>
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
                           <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sobre tus direcciones</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3">
               <form>
                  <input type="submit" onclick="window.location.href='https://github.com/MikkelyEV/DojaRevistas/blob/2ae0c6293449ec87f016022af2262fe2ee535991/Shipping.php';" class="profile-edit-btn" name="submit" value="Añadir Nueva Dirección" align="right"/>
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
            <div class="col-md-8" >

            


               </div>
         </div>
      </section>
      
   </body>
</html>