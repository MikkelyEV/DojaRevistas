<?php
session_start();
include "db_conn.php";
?>

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style-prov.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" id="bootstrap-css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    

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
            <form action="" method="get" >
            <div class="row justify-content-md-center">
                        <div class="form-group col-sm-2 flex-column d-flex"> <label class="form-control-label px-3" align="center">ID Proveedor</label> <input type="number" class="form-control input-lg" id="idProveedor" name="idProveedor" value="32" readonly style="text-align:center;" onblur="validate(1)"> </div>
            </div>
                    <div class="row justify-content-between text-center">
                        <div class="form-group col-sm-3 flex-column d-flex" style="margin-left:auto;margin-right:1%;display:block;margin-top:1%;margin-bottom:0%"> <label class="form-control-label px-3">Nombre del Producto
                        <form>
                        <select class='form-select' aria-label='Default select example' aria-placeholder="Selecciona un producto" id="product" name="producto">;
                
                    <?php
                    $query = "SELECT nombre_producto FROM PRODUCTO";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($rows=mysqli_fetch_assoc($result)){
                            echo "<option value=".$rows['nombre_producto']."'>".$rows['nombre_producto']."</option>";
                        }
                    } else {
                    echo "<option value=0Resultados></option>";
                    }
                    echo "</select>";
                    
                    
                    ?>

                    </div>
                    <div class="form-group col-sm-3 flex-column d-flex" style="margin-left:1%;margin-right:auto;display:block;margin-top:1%;margin-bottom:0%"> <label class="form-control-label px-3">Cantidad<span class="text-danger"> *</span></label> <input class="form-control input-lg" type="number" id="cantidadUnidad" name="cantidadUnidad" placeholder="Ingrese la cantidad" onblur="validate(5)"> </div>
                    </div>
                    <br>
                    <section id="importe">
				    </section>	
                    
                    <br>
                    <div class="row justify-content-between text-center">
                        <div class="form-group col-sm-2 flex-column d-flex" style="margin-left:auto;margin-right:auto;display:block;margin-top:1%;margin-bottom:0%"> <label class="form-control-label px-3">Fecha de Alta<span class="text-danger"> *</span></label> <input class="form-control input-lg" type="date" id="fecha" name="fecha" onblur="validate(6)"> </div>
                    </div>
                    <br><br><br>
                    <div class="wrapper">
                    <button class="button-9" type="submit" name="submit">Guardar</button>
                    </form> 
                    </div>
                    <?php
                   
                        //API URL
                        $url = 'https://proveedores-api-production.up.railway.app/api/producto';

                        //create a new cURL resource
                        $ch = curl_init($url);

                        //setup request to send json via POST
                        $data = array(
                            'idProducto' => '1',
                            'nombre' => 'Billboard invierno',
                            'importe'  => '10',
                            'cantidadUnidad'  => '100',
                            'total'  => '1000',
                            'fecha'  => '2022-12-14T00:00:00.000Z',
                            'idProveedor'  => '32',
                            'descripcion'  => 'Revista billboard invierno 2022'
                        );
                        $info = json_encode(array("32" => $data));
                        
                        //attach encoded JSON string to the POST fields
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $info);

                        //set the content type to application/json
                        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

                        //return response instead of outputting
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                        //execute the POST request
                        $result = curl_exec($ch);

                        //close cURL resource
                        curl_close($ch);


                    ?>  

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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript">
	$(document).ready(function(){
		$('#product').change(function(){
            var e = document.getElementById("product");
			var nombre_producto = e.options[e.selectedIndex].text;
			$.ajax({
				url: "ajaxfile.php",		
				method: "POST",				
				data: {nombre_producto:nombre_producto},	
				success:function(data)		
				{
					$('#importe').html(data);
				}
			});
		});
	});
</script> 
</body>
</html>
