<?php require_once '../includes/conexion.php'; ?>
<?php sleep(2); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viveros</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/main-styles.css"> 
    <link rel="stylesheet" href="../css/layout.css">
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
        <a href="viveros.php">
            <img class="img" src="../imagenes/logo.jpeg" alt="logo">    
        </a>
    </div>
    <div class="content-imagen">
        <a href="viveros.php">
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
    <section id="main-viv">
       <h4 name="title-viv">Informacion acerca de los cultivos que se llevan acabo en los viveros</h4>
       <div class="content-viv">
           <form id="form-viv">
               <label for="fol-viv">Folio del vivero:</label>
               <input type="text" name="fviv" id="fviv">

               <label for="nom-viv">Nombre del vivero:</label>
               <input type="text" name="nomviv" id="nomviv">
                <br>
               <label for="eix">Existencia:</label>
               <input type="number" name="existencia" id="existencia">

               <label for="direc">Direccion:</label>
               <input type="text" name="dir" id="dir">

               <label for="estado">Estado:</label>
               <input type="text" name="edoviv" id="edoviv">

               <label for="mun">Municipio:</label>
               <input type="text" name="muniviv" id="muniviv">

               <label for="fen">Folio del encargado:</label>
               <input type="text" name="fenc" id="fenc">
                <br>
               <label for="typrplant">Tipo de planta:</label>
               <input type="text" name="tpl" id="tpl">

               <label for="catnti">Cantidad:</label>
               <input type="number" name="cant" id="cant">

               <button type="submit" id="btn-viv">Registrar</button>
           </form>

           <div class="position-button">
                <button type="button" id="updateviv">Actualizar</button>
                <button type="button" id="deleteviv">Eliminar</button>
                <button type="button" id="queryviv">Consultar</button>
                <button type="button" id="graficaviv">Ver grafica</button>
           </div>
       </div>
       <div class="actviv">
           <h2 name="title-vivero">Actualizar por su folio del vivero</h2>
           <form id="updatevivero">
           <label for="foli-viv">Folio del vivero:</label>
               <input type="text" name="upviv" id="upviv">

               <label for="upnom-viv">Nombre del vivero:</label>
               <input type="text" name="upnom" id="upnom">
                <br>
               <label for="upeix">Existencia:</label>
               <input type="number" name="upexistencia" id="upexistencia">

               <label for="updirec">Direccion:</label>
               <input type="text" name="updir" id="updir">

               <label for="upestado">Estado:</label>
               <input type="text" name="upedoviv" id="upedoviv">

               <label for="upmun">Municipio:</label>
               <input type="text" name="upmuniviv" id="upmuniviv">

               <label for="upfen">Folio del encargado:</label>
               <input type="text" name="upfenc" id="upfenc">
                <br>
               <label for="uptyprplant">Tipo de planta:</label>
               <input type="text" name="uptpl" id="uptpl">

               <label for="upcatnti">Cantidad:</label>
               <input type="number" name="upcant" id="upcant">

               <button type="submit" id="actu-viv">Actualizar</button>
           </form>
       </div>
       <div class="eliviv">
           <h2 name="title-borrar">Eliminar datos por su folio de vivero</h2>
           <form id="deletevivero">
                <label for="bf">Folio del vivero:</label>
                <input type="text" name="del-viv" id="del-viv">

                <button type="submit" id="button-delete">Eliminar</button>
           </form>
       </div>

       <div class="consultviv">
           <table id="table-viv">
                <thead>
                    <tr>
                        <th>Folio del vivero</th>
                        <th>Nombre del vivero</th>
                        <th>Existencia</th>
                        <th>Direccion</th>
                        <th>Estado</th>
                        <th>Municipio</th>
                        <th>Folio del encargado</th>
                        <th>Tipo de planta</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody id="showViv">

                </tbody>
           </table>
       </div>
       <div class="grafviv">
           <canvas id="grafica-viv" width="500" height="500"></canvas>
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