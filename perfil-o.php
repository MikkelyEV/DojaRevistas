
<!DOCTYPE HTML>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Historial de Pedidos</title>
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
                           <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sobre tus pedidos</a>
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
            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Numero de pedido</th>
      <th scope="col">Pedido realizado</th>
      <th scope="col">Total</th>
      <th scope="col">Enviar a</th>
    </tr>
  </thead>
  <tbody>
  <?php
   $sql = "SELECT id, firstname, lastname FROM MyGuests";
   $result = $conn->query($sql);
   
   if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
       echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
     }
   } else {
     echo "0 results";
   }
  ?>
 
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
                    
               </div>
         </form>
         </div>
      </section>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>