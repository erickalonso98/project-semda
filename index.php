<?php require 'includes/conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet"> 
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/bcbc1b7dc7.js" crossorigin="anonymous"></script>
    <!--Styles-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main-styles.css"> 
    <!--jQuery y JS-->
    <script src="jquery/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="js/index.js"></script>
</head>
<body>
    <header class="barra"></header>
    <div class="conten-img">
        <a href="index.php">
            <img class="img" src="imagenes/logo.jpeg" alt="logo">    
        </a>
    </div>
    <div class="content-imagen">
        <a href="index.php">
            <img class="imagen" src="imagenes/ARBOL.png" alt="ARBOL">
        </a>
    </div>
    <div class="barra-title">
        <div class="title">
            <p class="parrafo">
                Bienvenido al Sistema integral de control de datos<br>del programa sembrando vida
            </p>
        </div>
    </div>
    <section id="section-global">
        <a href="index.php">
            <img class="logo-home" src="imagenes/imagen-sembra.jpg" alt="sembra principal">
        </a>
    </section>
    <aside id="sidebar">
        <div id="container">
            <h4>Ingrese su usuario y contraseña</h4>
            <form id="formulario" action="logear.php" method="post">
                    <label for="User">usuario</label>
                    <input type="text" name="user" id="user">
                
                    <label for="Pass">contraseña</label>
                    <input type="password" name="password" id="password">
                <input type="submit" name="iniciar" value="Continuar">
            </form>
        </div>
    </aside>
    <footer class="footer">
        <h4><p>Siguenos en redes sociales</p></h4>
        <div class="red-social">
            <div class="red-social-red">
                <a href="http://www.facebook.com"><i class="fab fa-facebook"></i></a>
            </div>
    
            <div class="red-social-red">
                <a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a>
            </div>
    
            <div class="red-social-red">
                <a href="http://youtube.com"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
            <a href="#" class="subir">Ir arriba</a>
        <div class="contact">
            <p class="contact-p">Contactanos:erick.edjaa@gmail.com <br>acercar de</p>
        </div>
    </footer>
</body>
</html>
