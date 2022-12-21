<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    
    <meta charset="UTF-8">
    <title> Doja Revistas</title>
    
    <link rel="stylesheet" href="EstiloPago.css">
    <script src="https://kit.fontawesome.com/javascript.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
  </div>
    
    <div class="textBox">
        <h2 align="center"><span>Proceso de envío</span> </h2>
    </div>

<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">Dirección de envío</h3>

                <div class="inputBox">
                    <span>Nombre completo :</span>
                    <input type="text" placeholder="Carlos Rubio">
                </div>
                <div class="inputBox">
                    <span>Correo :</span>
                    <input type="email" placeholder="ejemplo@ejemplo.com">
                </div>
                <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
                <div class="inputBox">
                    <span>ciudad :</span>
                    <input type="text" placeholder="Hermosillo">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Estado :</span>
                        <input type="text" placeholder="Sonora">
                    </div>
                    <div class="inputBox">
                        <span>Código Postal :</span>
                        <input type="text" placeholder="83200">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">Pago</h3>

                <div class="inputBox">
                    <span>Tarjetas aceptadas :</span>
                    <img src="card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Propietario de la tarjeta :</span>
                    <input type="text" placeholder="Carlos Rubio">
                </div>
                <div class="inputBox">
                    <span>Numero de tarjeta :</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>Fecha vencimiento :</span>
                    <input type="text" placeholder="Enero">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Año de vencimiento :</span>
                        <input type="number" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="Enviar" class="submit-btn">

    </form>

</div>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>