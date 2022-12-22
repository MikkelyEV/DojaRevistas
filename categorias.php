<!DOCTYPE html>
<html lang="en" >
<head>
   
  <meta charset="UTF-8">
  <title>CodePen - Carrito de Compras Vanilla js</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<?php
   session_start();
   include "db_conn.php";
   ?>
<!DOCTYPE html>
<html lang="en">
   <title>Categorias</title>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Carrito</title>
      <link rel="stylesheet" href="./style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://code.jquery.com/jquery-3.3.1.slim.min.js">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/custom.css">
      <link rel="stylesheet" href="navbar.css">
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
         <div class="container">
            <div class="row">
                <div class="two columns u-pull-right">
                    <ul>
                        <li class="submenu">
                            <img src="https://i.ibb.co/QM3Nqk4/cart.png" alt="cart" border="0" id="img-carrito">
                            <div id="carrito">

                                <table id="lista-carrito" class="u-full-width">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th>Cantidad</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                                <a href="Pago.php" id="pagar" class="button u-full-width">Pagar</a>
                                <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                                <script href="script.js">
                  document.write('Total de la compra' + total1);
               </script>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>

      

      <div id="lista-cursos" class="container">
       <h1 id="encabezado" style='font-size: 35px;' class="encabezado"><b>Lo mas TOP en revistas</h1>
         <div id="myBtnContainer">
            <button class="btn active" onclick="filterSelection('Todo')"> Show all</button>
            <button class="btn" onclick="filterSelection('Vogue')"> Vogue</button>
            <button class="btn" onclick="filterSelection('ELLE')"> ELLE</button>
            <button class="btn" onclick="filterSelection('GQ')"> GQ</button>
            <button class="btn" onclick="filterSelection('Rolling Stone')"> Rolling Stone</button>
         </div>
         <div class="row">
            <?php
               $sql = "SELECT id_producto,nombre_producto,descripcion,categoria,precio,imagen FROM PRODUCTO";
               $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                        echo "<table>";
                        echo "<div class='card'>";
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                           $id = $row["id_producto"];
                           if ($i%3==0){
                              echo "<tr>";
                           }
                        echo "<td>";
                           echo "<img src='../image/" . $row['imagen'] . "' class='imagen-curso u-full-width' style='float: left;width:  300px;height: 400px; object-fit: cover;'>";
                           echo "<div class='info-card'>";
                           echo "<h4 style='font-size: 35px;'>" . $row['nombre_producto'] . "</h4>";
                           echo "<p style='font-size: 15px;'>" . $row['descripcion'] . "</p>";
                           echo "<img src='https://i.ibb.co/x2TQGkZ/estrellas.png' alt='estrellas'>";
                           echo "<span style='font-size: 20px;' class='u-pull-right'>$" . $row['precio'] . "</span>";
                           echo "<a href='#' class='u-full-width button-primary button input agregar-carrito' data-id=" . $row['id_producto'] . ">Agregar Al Carrito</a>";
                           echo "</td>";
                           if ($i%3==2){
                           echo "</tr>";
                        } 
                        $i++;
                        echo "</div>";
                    }
            }else{
                   echo "0 resultados";
                   }
               ?>
         </div>
      </div>
      <script>
         $(document).ready(function() {
         $('#navbarDropdown').mouseenter(function() {
             $('.dropdown-menu').slideToggle(300, "linear");
         });
         
         $('.dropdown-menu').mouseleave(function() {
             $(this).slideToggle(300, "linear");
         });
         });
      </script>
      <script src="js/app.js"></script>

</body>

</html>
<!-- partial -->
  <script  src="script.js"></script>

</body>
</html>
