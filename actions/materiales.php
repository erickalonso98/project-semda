<?php sleep(2); ?>
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
    <link rel="stylesheet" href="../css/insumos.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/bcbc1b7dc7.js" crossorigin="anonymous"></script>
    <script src="../jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="../jquery/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="../jquery/jquery-ui/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="../jquery/jquery-ui/jquery-ui.theme.min.css">
    <script src="../jquery/jquery-ui/jquery-ui.min.js"></script>
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
    <section id="main-isumo">
        <h4 name="tli-insu">Informacion de insumos a beneficiarios</h4>
        <div class="content-insumos">
            <form id="formAddinsumo"> 
                <div class="content-entrada">
                    <label for="num-insu">Numero de insumo:</label>
                    <input type="number" name="ni" id="ni">

                    <label for="benefi">Folio de beneficiario:</label>
                    <input type="text" name="fve" id="fve">
                    <br>
                    <label for="date">Fecha:</label>
                    <input type="text" name="fch" id="fch">

                    <label for="hor">Hora:</label>
                    <input type="text" name="hra" id="hra">

                    <label for="materi">Material:</label>
                    <input type="text" name="mat" id="mat">
                
                <br>
                <label for="detalle">Detalles:</label><br>
                <textarea name="deta" id="deta" cols="30" rows="10"></textarea>
                <br>
                <label for="marca">Marca:</label>
                <input type="text" name="marc" id="marc">

                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cant" id="cant">

                <button type="submit" id="input-insu">Registrar</button>
             </div>
            </form>
            <div class="position-button">
                <button type="button" id="updateInsu">Actualizar</button>
                <button type="button" id="deleteInsu">Eliminar</button>
                <button type="button" id="queryInsu">Consultar</button>
                <button type="button" id="viewgraf">ver grafica</button>
            </div>
        </div>
        <div class="contenedor-insu-update">
            <form>

            </form>
        </div>
        <div class="contenedor-insu-delete">
            <form>
                
            </form>
        </div>
        <div class="contenedor-insu-query">
            <table id="table-insu">
                <thead>
                    <tr>
                        <th>Numero de insumo</th>
                        <th>Folio de beneficiario</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Material entregado</th>
                        <th>Detalles</th>
                        <th>Marca</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody id="showInsu">

                </tbody>
            </table>
        </div>
        <div class="contenedor-insu-grafica">
            <canvas id="grafica-insumos" width="500" height="500"></canvas>
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