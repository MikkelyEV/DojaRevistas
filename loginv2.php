
          <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Log-In</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Handlee|Josefin+Sans:300,600&amp;display=swap'><link rel="stylesheet" href="./style-loginv2.css">

</head>
<body>

<!-- partial:index.partial.html -->
<div class="container">
  <div class="card-wrap">
    <div class="card border-0 shadow card--welcome is-show" id="welcome">
      <div class="card-body">
        <h2 class="card-title">BIENVENIDO</h2>
        <p>Bienvenido a la página de inicio de sesión</p>
        <div class="btn-wrap"><a class="btn btn-lg btn-register js-btn" data-target="register">REGISTRAR</a><a class="btn btn-lg btn-login js-btn" data-target="login">LOGIN</a></div>
      </div>
    </div>
    <form action="signup.php">
    <div class="card border-0 shadow card--register" id="register">
      <div class="card-body">
        <h2 class="card-title">Crear una Cuenta</h2>
        <p class="card-text">Ingresa tu información personal<br/>y comienza una aventura con nosotros</p>
          <div class="form-group">
            <input class="form-control" type="text" name="nombre" placeholder="Nombre" required="required"/>
          </div>
          <div class="form-group">
            <input class="form-control" type="email" name="correo_electronico" placeholder="Email" required="required"/>
          </div>
          <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Contraseña" required="required"/>
          </div>
          <div class="form-group">
            <input class="form-control" type="tel" name="telefono" placeholder="Teléfono" required="required"/>
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="rfc" placeholder="RFC (Opcional)" />
          </div>

          <button class="btn btn-lg">REGISTRAR</button>
        </form>
      </div>
      <button class="btn btn-back js-btn" data-target="welcome"><i class="fas fa-angle-left"></i></button>
    </div>
    <div class="card border-0 shadow card--login" id="login">
      <div class="card-body">
        <h2 class="card-title">Bienvenido de Vuelta!</h2>
        <p>Para mantenerte conectado<br/>Inicia sesión con tus datos de usuario</p>
        
        <form action="login.php" method="Post">
          <div class="form-group">
            <input class="form-control" type="email" placeholder="Email" required="required"/>
          </div>
          <div class="form-group">
            <input class="form-control" type="password" placeholder="Contraseña" required="required"/>
          </div>
          <!-- <p><a>Olvidaste tu contraseña?</a></p>-->
          <button class="btn btn-lg" type="submit">LOGIN</button>
        </form>
      </div>
      <button class="btn btn-back js-btn" data-target="welcome"><i class="fas fa-angle-left"></i></button>
    </div>
  </div>
</div>
<!-- partial -->
  <script  src="./script-loginv2.js"></script>

</body>
</html>
