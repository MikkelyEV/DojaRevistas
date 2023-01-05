<?php
   session_start();
   include "db_conn.php";
   $id=array(
     7,
     8,
     9
   );
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="UTF-8">
      <title>Pago</title>
      <link rel="stylesheet" href="EstiloPago.css">
      <script src="https://kit.fontawesome.com/javascript.js" crossorigin="anonymous"></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="navbar.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
      <div class="container">
      <section class="h-100 h-custom" style="background-color: #d2c9ff;">
         <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col-12">
                  <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                     <div class="card-body p-0">
                        <div class="row g-0">
                           <div class="col-lg-8">
                              <div class="p-5">
                                 <div class="d-flex justify-content-between align-items-center mb-5">
                                    <h1 class="fw-bold mb-0 text-black">Carrito de Compra</h1>
                                    <h6 class="mb-0 text-muted"><?php echo (count($id)) ?> articulos</h6>
                                 </div>
                                 <?php
                                    $c=0;
                                    $st = 0;
                                    $sql = "SELECT id_producto,nombre_producto,descripcion,precio, imagen FROM PRODUCTO";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                       // output data of each row
                                       
                                       while( $row = mysqli_fetch_assoc($result)) {
                                        $id_p = intval($row['id_producto']);
                                        if(!(empty($id[$c]))&&($id_p===$id[$c])){
                                          echo '<hr class="my-4">
                                          <div class="row mb-4 d-flex justify-content-between align-items-center">
                                          <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img
                                              src="' . $row["imagen"] . '"
                                              class="img-fluid rounded-3">
                                          </div>
                                          <div class="col-md-3 col-lg-3 col-xl-3">
                                            <h6 class="text-muted">' . $row["nombre_producto"] . '</h6>
                                            <h6 class="text-black mb-0">' . $row["descripcion"] . '</h6>
                                          </div>
                                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <button class="btn btn-link px-2"
                                              onclick="this.parentNode.querySelector("input[type=number]").stepDown()">
                                              <i class="fas fa-minus"></i>
                                            </button>
                                    
                                            <input id="form1" min="0" name="quantity" value="1" type="number"
                                              class="form-control form-control-sm" />
                                    
                                            <button class="btn btn-link px-2"
                                              onclick="this.parentNode.querySelector("input[type=number]").stepUp()">
                                              <i class="fas fa-plus"></i>
                                            </button>
                                          </div>
                                          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                            <h6 class="mb-0">$' . $row["precio"] . '</h6>
                                          </div>
                                          <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                          </div>
                                        </div>';
                                          $st += $row["precio"];
                                        $c++;
                                        }
                                            
                                       }
                                      }
                                    ?>
                                 <hr class="my-4">
                                 <div>
                                 <h3 class="title">Pago</h3>
                                    <div class="inputBox">
                                       <span>Tarjetas aceptadas :</span>
                                       <img src="card_img.png" alt="" class= 'form-control form-control-sm' width="30" height="30"  style="object-fit:scale-down;">
                                    </div>
                                    
                                    <form id="post" action="ConfInfo.php" method="POST">
                                       <div class="inputBox">
                                          <span>Propietario de la tarjeta :</span>
                                          <input type="text" placeholder="Carlos Rubio" class= 'form-control form-control-sm' name='nombre'>
                                       </div>
                                       <div class="inputBox">
                                          <span>Numero de tarjeta :</span>
                                          <input type="text" placeholder="1111-2222-3333-4444" class= 'form-control form-control-sm' name='notarjeta_org'>
                                       </div>
                                       <div class="inputBox">
                                          <span>Fecha vencimiento :</span>
                                          <input type="text" placeholder="01/25" class= 'form-control form-control-sm' name='fecha_v'>
                                       </div>
                                       <div class="flex">
                                          <div class="inputBox">
                                             <span>CVV :</span>
                                             <input type="text" placeholder="123" class= 'form-control form-control-sm' name='cvv'>
                                          </div>
                                       </div>
                                       <br>
                                       <button type="submit" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark" >Pagar</button>
                                    
                                 </div>
                                 <div class="pt-5">
                                    <h6 class="mb-0"><a href="categorias.php" class="text-body"><i
                                       class="fas fa-long-arrow-alt-left me-2" ></i>Volver a la tienda</a></h6>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 bg-grey">
                              <div class="p-5">
                                 <h3 class="fw-bold mb-5 mt-2 pt-1">Resumen de Compra</h3>
                                 <hr class="my-4">
                                 <div class="d-flex justify-content-between mb-4">
                                    <h5 class="text-uppercase"><?php echo $c ?> items</h5>
                                    <h5>$<?php echo $st ?> </h5>
                                 </div>
                                 <h5 class="text-uppercase mb-3">Envío</h5>
                                 <div class="mb-4 pb-2">
                                    <select class='form-select' aria-label='Default select example' aria-placeholder="Selecciona tu envío" id="envio" name='envio' onchange="func2()">
                                       ;
                                       <option value="0">Selecciona tu envío</option>
                                       <option value="1">Envío estandar 7-15 días $130</option>
                                       <option value="2">Envío premium 2-3 días $250</option>
                                    </select>
                                 </div>
                                 <span>Direccion :</span>
                                 <select class='form-select' aria-label='Default select example' aria-placeholder="Selecciona tu direccion" name="direccion" id="direccion">;
                                 <?php
                                    $query = "Select id_direccion,calle,numero_ext,colonia,ciudad,zip,estado,CONCAT(calle,' ',numero_ext,' ',colonia,' ',ciudad,' ',zip,' ',estado) as D FROM DIRECCION WHERE id_cliente=".$_SESSION["id"];
                                    $result = mysqli_query($conn, $query);
                                    
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($rows=mysqli_fetch_assoc($result)){
                                            echo '<option value="'.$rows['D'].'">'.$rows['calle']." ".$rows['numero_ext']." ".$rows['colonia'].'</option>';
                                     $_SESSION['id_direccion'] = $rows['id_direccion'];
                                        }
                                    } else {
                                        echo "<option value=0Resultados></option>";
                                        
                                    }
                                     
                                    ?>
                                 </select>
                                 <hr class="my-4">
                                 <div class="d-flex justify-content-between mb-5">
                                    <h5 class="text-uppercase">Total: </h5>
                                    <h5>
                                      <div>
                                       <input id="total" name="total"readonly>
                                  </div>
                                    </h5>
                                    </form>
                                    </div>
                                    
                                    
                                    
                                    
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </section>
      </div>    
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script
         src="https://code.jquery.com/jquery-3.6.3.js"
         integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
         crossorigin="anonymous"></script>
      <script type="text/javascript">
         $(document).ready(function(){
         	$('#direccion').change(function(){
                    var e = document.getElementById("direccion");
         		var calle  = e.options[e.selectedIndex].text;
         		$.ajax({
         			url: "ajaxfile pago.php",		
         			method: "POST",				
         			data: {calle:calle},	
         			success:function(data)		
         			{
         				
         			}
         		});
         	});
         });
      </script> 
      <script>
         function func2(){
           if(document.getElementById('envio').value == "1") {
             var temp= "<?php echo $st;?>";
             var total= parseFloat(temp) + 130;
             document.getElementById("total").value = "$"+total;
           }else if(document.getElementById('envio').value == "2"){
             var temp= "<?php echo $st; ?>";
             var total= parseFloat(temp) + 250;
             document.getElementById("total").value = "$"+total;
           }
         }
      </script>
   </body>
</html>