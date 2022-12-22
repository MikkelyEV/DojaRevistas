<?php
session_start();
include "../db_conn.php";
?>

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!--<title>Admin Dashboard Panel</title>--> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!--<img src="images/logo.png" alt="">-->
            </div>

            <span class="logo_name">Doja Revistas</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="productos.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Productos</span>
                </a></li>
                <li><a href="Proveedores.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Proveedores</span>
                </a></li>
                <li><a href="Pedidos.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Pedidos</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="/logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Cerrar Sesión</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-chart"></i>
                    <span class="text">Pedidos</span>
                </div>

            </div>
            <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span>Nombre de Producto</span>  <span> Descripción</span> <span> Categoría </span>  <span> Precio </span> <span> Frecuencia </span> <span> Stock </span> <span> Portada </span> <span> </span>  
            </li>
            <?php
            $sql = "SELECT id_pedido,id_cliente,total,dir_entrega,fecha_entr FROM PEDIDOS";
            SELECT p.id_pedido,p.id_cliente,p.total,p.dir_entrega,p.fecha_entr FROM pedidos as p 
   INNER JOIN cliente as c ON c.id_cliente = o.id_pedido 
   INNER JOIN producto as a ON o.id_producto = a.id_producto 
   INNER JOIN direccion as d ON p.id_direccion=d.id_direccion  
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
               // output data of each row
               while( $row = mysqli_fetch_assoc($result)) {
            
               $id = $row["id_producto"];
               echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
               echo "<span>".$row["nombre_producto"]."</span> <span>".$row["descripcion"]."</span> <span>".$row["categoria"].
               "</span> <span>".$row["precio"]."</span> <span>".$row["frecuencia"]."</span> <span>".$row["Stock"]."</span> <span> <img src='../image/".$row['imagen']."' width='60' height='80'/></span>";
                  echo "<a href='delprod.php?id=".$row['id_producto']."'>Delete</a>";
               
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
        const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
    }else{
        localStorage.setItem("mode", "light");
    }
});

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})
    </script>
</body>
</html>
