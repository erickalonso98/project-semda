<?php require '../includes/conexion.php'; ?>
<?php sleep(2); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantas</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/main-styles.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/bcbc1b7dc7.js" crossorigin="anonymous"></script>
    <script src="../jquery/jquery.min.js"></script><!--
    <link rel="stylesheet" href="../jquery/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="../jquery/jquery-ui/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="../jquery/jquery-ui/jquery-ui.theme.min.css">
    <script src="../jquery/jquery-ui/jquery-ui.min.js"></script>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="../js/index.js"></script>
</head>
<body>
<header class="barra"></header>
    <div class="conten-img">
        <a href="plantas.php">
            <img class="img" src="../imagenes/logo.jpeg" alt="logo">    
        </a>
    </div>
    <div class="content-imagen">
        <a href="plantas.php">
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
    <section id="plantas-global">
        <h4 name="title-plant">Informacion de las plantas destinadas al programa semda</h4>
        <div class="content-form-plant">
            <form id="form-plant">
                <label for="fplanta">Folio de la planta:</label>
                <input type="text" name="fplant" id="fplant">

                <label for="nplant">Nombre de la planta:</label>
                <input type="text" name="nom" id="nom">
                <br>
                <label for="mplant">Medidas a sembrar:</label>
                <input type="text" name="medsie" id="medsie">

                <label for="eplant">Existencia:</label>
                <input type="number" name="exist" id="exist">
                <br>
                <label for="folio-vivero">Folio del vivero:</label>
                <input type="text" name="fvi" id="fvi">

                <label for="fplant">Folio del beneficiario:</label>
                <input type="text" name="fbene" id="fbene">

                <button type="submit" id="btn-plant">Registrar</button>
            </form>
            <div class="position">
                <button type="button" id="updateplant">Actualizar</button>
                <button type="button" id="deleteplant">Eliminar</button>
                <button type="button" id="consultplant">Consultar</button>
                <button type="button" id="grafica-plant">Ver grafica</button>
            </div>
        </div>
        <div class="actualizar-plant">
        <h2 name="actualiplant">Actualizar datos por su folio de la planta</h2>
            <form id="updateplanta">
                <label for="pplant">Folio de la Planta:</label>
                <input type="text" name="acplant" id="acplant">

                <label for="ppnom">Nombre:</label>
                <input type="text" name="acnomplant" id="acnomplant">

                <label for="medida">Medidas a sembrar:</label>
                <input type="text" name="acmedsie" id="acmedsie">

                <label for="existencia">Existencia:</label>
                <input type="number" name="acexist" id="acexist">

                <label for="vivero">Folio del vivero:</label>
                <input type="text" name="acviv" id="acviv">
                <br>
                <label for="foliobenefi">Folio del beneficiario:</label>
                <input type="text" name="actben" id="actben">

                <button type="submit" id="styleupdate">Actualizar</button>
            </form>
        </div>
        <div class="borrar-plant">
        <h2 name="deleteplant">Eliminar datos por su folio de la planta</h2>
            <form id="delete-planta">
                <label for="folio_plant">Folio de la Planta:</label>
                <input type="text" name="eliplant" id="eliplant">
                <center>
                    <button type="submit" id="borrar-plant">Eliminar</button>
                </center>
            </form>
        </div>
        <div class="queryplant">
            <table id="tabla-plant">
                    <thead>
                        <tr>
                            <th>Folio de la Planta</th>
                            <th>Nombre</th>
                            <th>Medida</th>
                            <th>Existencia</th>
                            <th>Folio del vivero</th>
                            <th>Folio del beneficiario</th>
                        </tr>
                    </thead>
                    <tbody id="showPlant">
                    
                    </tbody>
                </table>
        </div>
        <div class="content-grafica3">
            <canvas id="grafica-three" width="500" height="500"></canvas>
        </div>
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