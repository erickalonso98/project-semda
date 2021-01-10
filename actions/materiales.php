<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insumos</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/main-styles.css"> 
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/optional-styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/bcbc1b7dc7.js" crossorigin="anonymous"></script>
    <script src="../jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="../js/index.js"></script>
</head>
<body>
<header class="barra"></header>
    <div class="conten-img">
        <a href="materiales.php">
            <img class="img" src="../imagenes/logo.jpeg" alt="logo">    
        </a>
    </div>
    <div class="content-imagen">
        <a href="materiales.php">
            <img class="imagen" src="../imagenes/ARBOL.png" alt="ARBOL">
        </a>
    </div>
    <div class="barra-title">
        <div class="title">
            <p class="parrafo">
                Bienvenido al Sistema integral de control de datos<br>del programa sembrando vida
            </p>
        </div>
        <?php echo '<a name="salir" href="../cerrar.php">Cerrar Sesión</a>'; ?>
    </div>
    <section>

    </section>
    <aside class="menu">
        <h3>Bienvenido al control de datos <br><span>usuario</span></h3>
        <div class="button">
            <a href="../actions/beneficiarios.php">Beneficiarios</a>
        </div>

        <div class="button">
            <a href="../actions/propiedad.php">Propiedad</a>
        </div>

        <div class="button">
            <a href="../actions/materiales.php">Insumos</a>
        </div>

        <div class="button">
            <a href="../actions/viveros.php">Viveros</a>
        </div>

        <div class="button">
            <a href="../actions/plantas.php">Plantas</a>
        </div>

        <div class="button">
            <a href="../actions/proveedores.php">Proovedores</a>
        </div>

        <div class="button">
            <a href="../actions/produccion.php">Detalles de producción</a>
        </div>

        <div class="button">
            <a href="../actions/personal.php">Personal</a>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>