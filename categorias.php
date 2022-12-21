<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>Categorias</title>
    
    <!-- partial:index.partial.html -->
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Carrito</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://code.jquery.com/jquery-3.3.1.slim.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/custom.css">
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
                            <li class="submenu">
                                <img src="https://i.ibb.co/QM3Nqk4/cart.png" alt="cart" border="0" id="img-carrito">
                                <div id="carrito">

                                    <table id="lista-carrito" class="u-full-width">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="Pago.php" id="pagar" class="button u-full-width">Pagar</a>
                                    <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>

                                    <script href="script.js">
                                        document.write('Total de la compra' + total1);
                                    </script>



                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>


        <div id="hero">
            <div class="container">
                <div class="row">
                    <div class="six columns">
                        <div class="contenido-hero">
                            <h1>La revista que quieras la encuentras aquí</h1>
                            <form action="#" id="busqueda" method="post" class="formulario">
                                <input type="submit" id="submit-buscador" class="submit-buscador">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div id="lista-cursos" class="container">
            <h1 id="encabezado" class="encabezado">Lo mas TOP en revistas</h1>

            <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('Todo')"> Show all</button>
                <button class="btn" onclick="filterSelection('Vogue')"> Vogue</button>
                <button class="btn" onclick="filterSelection('ELLE')"> ELLE</button>
                <button class="btn" onclick="filterSelection('GQ')"> GQ</button>
                <button class="btn" onclick="filterSelection('Rolling Stone')"> Rolling Stone</button>
            </div>

            <div class="row">

                <div class="four columns vogue">
                    <div class="card">
                        <img src="cat1.jpeg" alt="curso1" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Vogue Rosalia</h4>
                            <p>Revista Vogue invierno 2022</p>
                            <img src="https://i.ibb.co/x2TQGkZ/estrellas.png" alt="estrellas">
                            <p class="precio">$300 <span class="u-pull-right ">240</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito"
                                data-id="1">Agregar Al Carrito</a>
                        </div>
                    </div>
                    <!--.card-->
                </div>
                <div class="four columns">
                    <div class="card">
                        <img src="cat2.jpg" alt="curso2" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>ALLONE Bad Buny</h4>
                            <p>Las mejores tendencias del 2022</p>
                            <img src="https://i.ibb.co/x2TQGkZ/estrellas.png" alt="estrellas" border="0">
                            <p class="precio">$200 <span class="u-pull-right ">185</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito"
                                data-id="2">Agregar Al Carrito</a>
                        </div>
                    </div>
                </div>
                <div class="four columns">
                    <div class="card">
                        <img src="cat3.jpg" alt="curso3" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>ELLE Billie Eilish</h4>
                            <p>La joven estrella nos cuenta como es llevar la fama</p>
                            <img src="https://i.ibb.co/x2TQGkZ/estrellas.png" alt="estrellas" border="0">
                            <p class="precio">$200 <span class="u-pull-right ">199</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito"
                                data-id="3">Agregar Al Carrito</a>
                        </div>
                    </div>
                    <!--.card-->
                </div>

            </div>
            <!--.row-->
            <div class="row">
                <div class="four columns">
                    <div class="card">
                        <img src="cat4.jpg" alt="curso4" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Elle Shakira</h4>
                            <p>Nos cuenta como ha sido su separación</p>
                            <img src="https://i.ibb.co/x2TQGkZ/estrellas.png" alt="estrellas" border="0">
                            <p class="precio">$200 <span class="u-pull-right ">187</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito"
                                data-id="4">Agregar Al Carrito</a>
                        </div>
                    </div>
                    <!--.card-->
                </div>
                <div class="four columns">
                    <div class="card">
                        <img src="cat5.jpg" alt="curso5" border="0" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Vogue Rihana</h4>
                            <p>La revista mas iconica de la moda</p>
                            <img src="https://i.ibb.co/x2TQGkZ/estrellas.png" alt="estrellas" border="0">
                            <p class="precio">$300 <span class="u-pull-right ">250</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito"
                                data-id="5">Agregar Al Carrito</a>
                        </div>
                    </div>
                    <!--.card-->
                </div>

                <div class="four columns">
                    <div class="card">
                        <img src="cat6.jpg" alt="curso5" border="0" class="imagen-curso u-full-width">
                        <div class="info-card">
                            <h4>Vogue Harry Styles</h4>
                            <p>La revista mas iconica de la moda</p>
                            <img src="https://i.ibb.co/x2TQGkZ/estrellas.png" alt="estrellas" border="0">
                            <p class="precio">$300 <span class="u-pull-right ">280</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito"
                                data-id="6">Agregar Al Carrito</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="four columns">
                        <div class="card">
                            <img src="cat7.png" alt="curso2" border="0" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>TÚ Kenia Os</h4>
                                <p>La revista mas famosa de México</p>
                                <img src="https://i.ibb.co/x2TQGkZ/estrellas.png" alt="estrellas" border="0">
                                <p class="precio">$200 <span class="u-pull-right ">158</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito"
                                    data-id="7">Agregar Al Carrito</a>
                            </div>
                        </div>
                    </div>

                    <div class="four columns">
                        <div class="card">
                            <img src="cat8.jpg" alt="curso5" border="0" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>GQ The Weekend</h4>
                                <p>La revista mas Fashion de la moda</p>
                                <img src="https://i.ibb.co/x2TQGkZ/estrellas.png" alt="estrellas" border="0">
                                <p class="precio">$300 <span class="u-pull-right ">280</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito"
                                    data-id="8">Agregar Al Carrito</a>
                            </div>
                        </div>
                    </div>

                    <div class="four columns">
                        <div class="card">
                            <img src="cat9.jpg" alt="curso5" border="0" class="imagen-curso u-full-width">
                            <div class="info-card">
                                <h4>Rolling Stone Lorde</h4>
                                <p>La revista de musica #1 en el mundo</p>
                                <img src="https://i.ibb.co/x2TQGkZ/estrellas.png" alt="estrellas" border="0">
                                <p class="precio">$300 <span class="u-pull-right ">290</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito"
                                    data-id="9">Agregar Al Carrito</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script>
            $(document).ready(function() {
            $('#navbarDropdown').mouseenter(function() {
                $('.dropdown-menu').slideToggle(300, "linear");
            });
            
            $('.dropdown-menu').mouseleave(function() {
                $(this).slideToggle(300, "linear");
            });
            });
        </script>
        <script src="js/app.js"></script>

    </body>

    </html>
    <!-- partial -->
    <script src="./script.js"></script>

</body>

</html>