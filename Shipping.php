<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Direcciones</title>
  <link rel="stylesheet" href="style-shipping.css">
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
</div>
<!-- partial:index.partial.html -->
<div class="container">
  <h1 align="left">Direcciones</h1>
  <p align="left">Porfavor ingresa tus datos de entrega.</p>
  <div class="form">
  <form action="regdir.php" method="POST">
  <div class="fields fields--2">
    <label class="field" align="left">
      <span class="field__label" for="calle">Calle</span>
      <input class="field__input" type="text" name="calle" id="calle"  />
    </label>
    <label class="field" align="left">
      <span class="field__label" for="numero_ext">Número Exterior</span>
      <input class="field__input" type="int" name="numero_ext" id="numero_ext" />
    </label>
  </div>
  <label class="field" align="left">
    <span class="field__label" for="colonia">Colonia</span>
    <input class="field__input" type="text" id="colonia" name="colonia" />
  </label>
  
  <label class="field" align="left">
    <span class="field__label" for="detalles">Detalles</span>
    <input class="field__input" type="text" id="detalles" name="detalles" />
  </label>
  
  <label class="field" align="left">
    <span class="field__label" for="country">País</span>
    <select class="field__input" id="country">
      <option value="mexico">México</option>
    </select>
  </label>
  <div class="fields fields--3">
    <label class="field" align="left">
      <span class="field__label" for="zip">Código Postal</span>
      <input class="field__input" type="int" id="zip" name="zip"/>
    </label>
    <label class="field" align="left">
      <span class="field__label" for="ciudad">Ciudad</span>
      <input class="field__input" type="text" id="ciudad" name="ciudad"/>
    </label>
    <label class="field" align="left">
      <span class="field__label" for="estado">Estado</span>
      <select class="field__input" name="estado" id="estado">
          <option value="DIF">Distrito Federal</option>
          <option value="AGS">Aguascalientes</option>
          <option value="BCN">Baja California</option>
          <option value="BCS">Baja California Sur</option>
          <option value="CAM">Campeche</option>
          <option value="CHP">Chiapas</option>
          <option value="CHI">Chihuahua</option>
          <option value="COA">Coahuila</option>
          <option value="COL">Colima</option>
          <option value="DUR">Durango</option>
          <option value="GTO">Guanajuato</option>
          <option value="GRO">Guerrero</option>
          <option value="HGO">Hidalgo</option>
          <option value="JAL">Jalisco</option>
          <option value="MEX">México</option>
          <option value="MIC">Michoacán</option>
          <option value="MOR">Morelos</option>
          <option value="NAY">Nayarit</option>
          <option value="NLE">Nuevo Le&oacute;n</option>
          <option value="OAX">Oaxaca</option>
          <option value="PUE">Puebla</option>
          <option value="QRO">Querétaro</option>
          <option value="ROO">Quintana Roo</option>
          <option value="SLP">San Luis Potos&iacute;</option>
          <option value="SIN">Sinaloa</option>
          <option value="SON">Sonora</option>
          <option value="TAB">Tabasco</option>
          <option value="TAM">Tamaulipas</option>
          <option value="TLX">Tlaxcala</option>
          <option value="VER">Veracruz</option>
          <option value="YUC">Yucatán</option>
          <option value="ZAC">Zacatecas</option>
      </select>
      
    </label>

    
  </div>
  </div>
  <hr>
  <button class="button" type="submit">Guardar</button>
  <br>
</form>
<form>
  <button class="button" formaction="perfil-d.php">Cancelar</button>
  </form>
</div>
<!-- partial -->
  
</body>
</html>
