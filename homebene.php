<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficiario</title>
     <!--Google Font-->
     <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet"> 
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/bcbc1b7dc7.js" crossorigin="anonymous"></script>
    <!--Styles-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="barra"></header>
<div class="conten-img">
        <a href="produccion.php">
            <img class="img" src="imagenes/logo.jpeg" alt="logo">    
        </a>
    </div>
    <div class="content-imagen">
        <a href="produccion.php">
            <img class="imagen" src="imagenes/ARBOL.png" alt="ARBOL">
        </a>
    </div>
    <div class="barra-title">
        <div class="title">
            <p class="parrafo">
                Bienvenido al Sistema integral de control de datos<br>del programa sembrando vida
            </p>
        </div>
        <?php echo '<a name="salir" href="cerrar.php">Cerrar Sesión</a>'; ?>
    </div>
    <section>
        <div class="content-type-user">
                <?php 
                require 'includes/conexion.php';
                session_start();
                $user = $_SESSION['user'];
                
            if(isset($user['tipo'])=='Beneficiario'){
                require 'includes/alers.php';
                echo '
                    <script type="text/javascript">
                        swal.fire({
                            title:"Bienvenido"
                        });
                </script>';
                echo '<h3>Bienvenido '.$user['user'].'-'.' '.$user['tipo'].'</h3>';
            }else{
                header('location:index.php');
            }
                
            ?>
        </div>
    </section>
    <aside class="menu">
        <h3>Bienvenido al control de datos <br><span>usuario</span></h3>
        <div class="button">
            <a href="beneficiarios/delivered.php">Platas entregadas</a>
        </div>

        <div class="button">
            <a href="beneficiarios/losses.php">Plantas Perdidas</a>
        </div>

        <div class="button">
            <a href="beneficiarios/harvested.php">Plantas Cosechadas</a>
        </div>
        <div class="button">
            <a href="beneficiarios/payment.php">Pagos</a>
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
        <div class="contact">
            <p class="contact-p">Contactanos:erick.edjaa@gmail.com <br>acercar de</p>
        </div>
    </footer>
</body>
</html>
