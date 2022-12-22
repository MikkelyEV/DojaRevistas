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
                    <i class="uil uil-estate"></i>
                    <span class="text">Productos</span>
                    <div class="col-md-10">
                    <form>
                        <button class="button-9" role="button" formaction="productos.php" align="right">Volver</button>
                    </form>
                    </div>
                </div>

            </div>
            
        </div>
        
        <form action="regProd.php" method="post" enctype="multipart/form-data">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nombre del Producto<span class="text-danger"> *</span></label> <input type="text" id="nombre_producto" name="nombre_producto" placeholder="Ingrese nombre del producto" onblur="validate(1)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Categoria<span class="text-danger"> *</span></label> <input type="text" id="categoria" name="categoria" placeholder="Ingrese la categoria" onblur="validate(2)"> </div>
                    </div>
                    <br>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Frecuencia<span class="text-danger"> *</span></label> <input type="text" id="frecuencia" name="frecuencia" placeholder="Ingrese la frecuencia de producción" onblur="validate(3)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Precio<span class="text-danger"> *</span></label> <input type="number" id="precio" name="precio" placeholder="Ingrese el precio" onblur="validate(4)"> </div>
                    </div>
                    <br>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Stock<span class="text-danger"> *</span></label> <input type="number" id="stock" name="stock" placeholder="Ingrese el stock actual" onblur="validate(5)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Descripción<span class="text-danger"> *</span></label> <input type="text" id="descripcion" name="descripcion" placeholder="Ingrese una breve descripción" onblur="validate(6)"> </div>
                    </div>
                    <br>
                    <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Selecciona una imagen:<span class="text-danger"> *</span></label></div>
                    </div>
                    <input class="form-control-label px-3" type="file" accept="image/png,image/jpeg" name="file" id="file">
                    <br>
                    <button class="button-9" type="submit" name="submit">Guardar</button>
            </form>   
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
