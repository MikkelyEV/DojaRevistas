<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Doja Revistas</title>
        <link rel="stylesheet" href="Estilo.css">
        <script src="https://kit.fontawesome.com/javascript.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        
    </head>
    <body>        
        <section>
            <input type="checkbox" id="ham-menu">
            <label for="ham-menu">
              <div class="hide-des">
                <span class="menu-line"></span>
                <span class="menu-line"></span>
                <span class="menu-line"></span>
                <span class="menu-line"></span>
                <span class="menu-line"></span>
                <span class="menu-line"></span>
              </div>
            
            </label>
            <div class="full-page-green"></div>
            <div class="ham-menu">
              <ul class="centre-text bold-text">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="loginv2.html">Mi Cuenta</a></li>
                <li>Soporte</li>
                <li>Contactanos</li>
            
              </ul>
            </div>
            <div class="circle"></div>
            
            <div class="content">
                <div class="textBox">
                    <h2>Las tendencias mas <br>TOP <span>del mundo</span> </h2>
                    <p> </p>
                    <a href="#"> Leer mas</a>
                </div>
                <div class="imgBox">
                    <img src="bg.png" class="revistas">
                </div>
            </div>
            <ul class="thumb">
                <li><img src="thumb1.png" onclick="imgSlider('imgBox1.png');changeCircleColor('#b5b5b5')"></li>
                <li><img src="thumb2.png" onclick="imgSlider('imgBox2.png');changeCircleColor('#63C5DA')"></li>
                <li><img src="thumb3.png" onclick="imgSlider('imgBox3.png');changeCircleColor('#FA8072')"></li>
                <li><img src="thumb4.png" onclick="imgSlider('imgBox4.png');changeCircleColor('#C6DA52')"></li>
            </ul>
        </section>
        <script type="text/javascript">
            function imgSlider(anything){
                document.querySelector('.revistas').src = anything;
            }

            function changeCircleColor(color){
                const circle = document.querySelector('.circle');
                circle.style.background = color;
            }
        </script>
    </body>
</html>