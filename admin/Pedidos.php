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
            <span>ID Pedido</span>  <span>ID Orden</span> <span>Nombre Producto</span>  <span>Nombre Cliente</span> <span>Dirección de Entrega</span> <span>Total</span> <span>Fecha de Entrega</span> 
            </li>
            <?php
            $sql = "SELECT p.id_pedido,pr.nombre_producto,o.id_orden,c.nombre,p.dir_entrega,p.total,p.fecha_entr FROM pedidos as p 
                    INNER JOIN clientes as c ON c.id_cliente = p.id_cliente
                    INNER JOIN orden as o ON p.id_pedido = o.id_pedido
                    INNER JOIN producto as pr ON pr.id_producto=o.id_producto
                    WHERE pr.id_producto=o.id_producto";


            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
               // output data of each row
               while( $row = mysqli_fetch_assoc($result)) {
            
               $id = $row["id_pedido"];
               echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
               echo "<span>".$row["id_pedido"]."</span> <span>".$row["id_orden"]."</span> <span>".$row["nombre_producto"].
               "</span> <span>".$row["nombre"]."</span> <span>".$row["dir_entrega"]."</span> <span>".$row["total"]."</span> <span>".$row["fecha_entr"];
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
