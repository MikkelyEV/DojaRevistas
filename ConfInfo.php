<?php
session_start();
include "db_conn.php";
$dir = isset($_POST['direccion']) ? $_POST['direccion'] : false;
  $nombre = $_SESSION["nombre"];
$nombref = $_POST["nombre"];
	$correo_electronico = $_SESSION["email"];
  $rfc = $_SESSION["rfc"];
  $env = $_POST['envio'];
$id_c = $_SESSION["id"];
$total = ltrim($_POST["total"], '$');
$Date = date("Y-m-d");
if ($env=1){
  $fecha_e=date('Y-m-d', strtotime($Date. ' + 12 days'));
}else{
  $fecha_e=date('Y-m-d', strtotime($Date. ' + 2 days'));
}
$id_d = $_SESSION['id_direccion'];

$tarjeta_org=$_POST['notarjeta_org'];
$cuenta_destino='5478469725844569';
$token = $_POST['cvv'];
$fecha_v=str_replace('/','%2F',$_POST['fecha_v']);

$sql2 = "INSERT INTO PEDIDOS(id_cliente,id_direccion,total,dir_entrega,fecha_entr) VALUES('$id_c','$id_d','$total','$dir','$fecha_e')";
$result2 = mysqli_query($conn, $sql2);
$id_p = mysqli_insert_id($conn);
$data = array($tarjeta_org,$fecha_v,$token,$cuenta_destino,$total);

$url = 'http://www.itbank.somee.com/api/Usuarios/Transferencia/';
$myvars = array($tarjeta_org . ',' . $fecha_v . ',' . $token . ',' . $cuenta_destino . ',' . $total);

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, count($myvars));
curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
$redirectedUrl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
print($redirectedUrl);


?>
 <?php
        
                        //API URL
                        $url = 'https://transportes-ith-api-production.up.railway.app/api/solicitudes';

                        //create a new cURL resource
                        $ch = curl_init($url);
                    
                        //setup request to send json via POST
                        $data = array(
                            
                            "numeroVenta" => $id_p ,
                            "productos"=>"Revistas",
                            "nombreDestinatario"=>$nombre,
                            "direccionDestino"=>$dir,
                            "fechaEntrega"=>"20221227",
                            "idCliente"=>"5"

                            
                            
                        );
                        $info = json_encode($data);
                    
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
                        //attach encoded JSON string to the POST fields
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $info);
                        curl_setopt($ch, CURLOPT_POST, true);
                        //set the content type to application/json
                        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
                            'Content-Type: application/json',                                                                                
                            'Content-Length: ' . strlen($info))                                                                       
                        );                                                                                                                   
                        
                        //return response instead of outputting
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                        //execute the POST request
                       $result = curl_exec($ch);
                        
                    
                        $responseData = json_decode($result, TRUE);
                    
                        //close cURL resource
                        curl_close($ch);


                    ?>  

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>Confirmacion</title>
    
    <!-- partial:index.partial.html -->
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">        
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://code.jquery.com/jquery-3.3.1.slim.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet" href="ConFest.css">
    </head>
    <body>
        <div class="header">
            <div class="menu">
              <a href="DojaRevistas.php" class="link">
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
          </div>
        <div class="container mt-5 d-flex justify-content-center">
            <div class="card p-4 mt-3">
               <div class="first d-flex justify-content-between align-items-center mb-3">
                 <div class="info">
                 <?php
                     echo "<span class='d-block name'>Gracias por tu compra de $total</span>";
                     ?>
                     <span class="order">Pedido - "pedido"</span>
                      
                 </div>
                
                  <img src="https://i.imgur.com/NiAVkEw.png" width="40"/>
                   
     
               </div>
                   <div class="detail">
               <span class="d-block summery">Su pedido se completo con exito</span>
                   </div>
               <hr>
               <div class="text">
               <?php
              echo "<span class='d-block new mb-1'>$nombref</span>";
              ?>
              </div>
              <?php
              echo "<span class='d-block address mb-3'>$dir</span>";
             ?>
               <div class="  money d-flex flex-row mt-2 align-items-center">
                 <img src="https://i.imgur.com/ppwgjMU.png" width="20" />
                              
     
                    </div>
                    <div class="last d-flex align-items-center mt-3">
                     
                     <table id="lista-carrito" class="u-full-width">
                      <thead>
                          <tr>                              
                              <th><a class="address-line" href="Factura.html">Factura</a></th>
                              <th></th>
                          </tr>
                      </thead>                      
                  </table>


                    </div>
             </div>
         </div>
        
    </body>
</html>
