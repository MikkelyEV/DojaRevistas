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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" id="bootstrap-css">

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
                    <i class="uil uil-files-landscapes"></i>
                    <span class="text">Proveedores</span>
                </div>

            </div>
            <div class="row justify-content-md-center">
                        <div class="form-group col-sm-2 flex-column d-flex"> <label class="form-control-label px-3" align="center">ID Proveedor</label> <input type="number" id="idProveedor" name="idProveedor" value="32" readonly style="text-align:center;" onblur="validate(1)"> </div>
            </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nombre del Producto<span class="text-danger"> *</span></label> <input type="text" id="nombre" name="nombre" placeholder="Ingrese nombre del producto" onblur="validate(1)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Importe<span class="text-danger"> *</span></label> <span><input type="number" id="importe" name="importe" placeholder="Ingrese el importe" onblur="validate(2)"> </span></div>
                    </div>
                    <br>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Descripcion<span class="text-danger"> *</span></label> <input type="text" id="descripcion" name="descripcion" placeholder="Ingrese una breve descripción" onblur="validate(3)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Cantidad<span class="text-danger"> *</span></label> <input type="number" id="cantidadUnidad" name="cantidadUnidad" placeholder="Ingrese la cantidad" onblur="validate(4)"> </div>
                    </div>
                    <br>
                    <br>
                    <button class="button-9" type="submit" name="submit">Guardar</button>
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
