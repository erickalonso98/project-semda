<?php require '../includes/conexion.php'; ?>
<?php sleep(2); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneficiarios</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/main-styles.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/bcbc1b7dc7.js" crossorigin="anonymous"></script>
    <script src="../jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="../jquery/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="../jquery/jquery-ui/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="../jquery/jquery-ui/jquery-ui.theme.min.css">
    <script src="../jquery/jquery-ui/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="../js/index.js"></script>
</head>
<body>
<header class="barra"></header>
<div class="conten-img">
        <a href="beneficiarios.php">
            <img class="img" src="../imagenes/logo.jpeg" alt="logo">    
        </a>
    </div>
    <div class="content-imagen">
        <a href="beneficiarios.php">
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
    <section id="seccion-one">
        <h4 name="title-one">Registra,actualiza y elimina datos con el programa integral Sembrando Vida</h4>
        <h4 name="title-bene">Datos del Beneficiario</h4>
        <div class="contenedor-form">
            <form id="bene-form">
                <label for="folio">Folio:</label>
                <input type="text" name="fben" id="fben">

                <label for="nom">Nombre:</label>
                <input type="text" name="nom" id="nom">

                <label for="paterno">Apellido Paterno:</label>
                <input type="text" name="ap" id="ap">
                <br>
                <label for="materno">Apellido Materno:</label>
                <input type="text" name="am" id="am">

                <label for="fechanac">Fecha de Nacimiento:</label>
                <input type="text" name="fnac" id="fnac">
                <br>
                <label for="sex">Sexo:</label>
                <input type="text" name="sexo" id="sexo">
                <br>
                <label for="codigo">Codigo Postal</label>
                <input type="number" name="cp" id="cp">

                <label for="Curp">Curp:</label>
                <input type="text" name="curp" id="curp">

                <label for="estado">Estado:</label>
                <input type="text" name="edo" id="edo">
                <br>
                <label for="munici">Municipio:</label>
                <input type="text" name="muni" id="muni">
                
                <label for="localidad">Localidad:</label>
                <input type="text" name="loc" id="loc">

                <label for="Calle">Calle:</label>
                <input type="text" name="calle" id="calle">
                <br>
                <label for="refe">Referencia:</label>
                <input type="text" name="ref" id="ref">

                <label for="emal">Email:</label>
                <input type="email" name="email" id="email">
                
                <label for="estado-civil">Estado Civil:</label>
                <input type="text" name="ecivil" id="ecivil">
                <br>
                <label for="telef">Telefono:</label>
                <input type="tel" name="tel" id="tel">

                    <button type="submit" id="btnRegistrar">Registrar</button>
            </form>
            
            <div class="posicion">
                <button type="button" id="btnUpdate">Actualizar</button>
                <button type="button" id="btnDelete">Eliminar</button>
                <button type="button" id="Consult">Consultar</button>
            </div> 
        </div>
        <div class="modal1">
            <h2 name="actuali">Actualizar datos por su folio</h2>
            <form id="form-update">
                <label for="folio">Folio:</label>
                <input type="text" name="acfolio" id="acfolio">

                <label for="nombre">Nombre:</label>
                <input type="text" name="acnombre" id="acnombre">

                <label for="appat">Apellido Paterno:</label>
                <input type="text" name="acap" id="acpa">
                <br>
                <label for="apmat">Apellido Materno:</label>
                <input type="text" name="acam" id="acam">
                
                <label for="fecha">Fecha de Nacimiento:</label>
                <input type="text" name="acfecha" id="acfecha">
                <br>
                <label for="sex">Sexo:</label>
                <input type="text" name="acsex" id="acsex">
                <br>
                <label for="accodigo">Codigo Postal</label>
                <input type="number" name="accp" id="accp">
                
                <label for="acCurp">Curp:</label>
                <input type="text" name="accurp" id="accurp">

                <label for="acestado">Estado:</label>
                <input type="text" name="acedo" id="acedo">
                <br>
                <label for="acmunici">Municipio:</label>
                <input type="text" name="acmuni" id="acmuni">
                
                <label for="aclocalidad">Localidad:</label>
                <input type="text" name="acloc" id="acloc">

                <label for="acCalle">Calle:</label>
                <input type="text" name="accalle" id="accalle">
                <br>
                <label for="acrefe">Referencia:</label>
                <input type="text" name="acref" id="acref">

                <label for="actemal">Email:</label>
                <input type="email" name="acemail" id="acemail">
                <br>
                <label for="acestado-civil">Estado Civil:</label>
                <input type="text" name="acecivil" id="acecivil">
                
                <label for="actelef">Telefono:</label>
                <input type="tel" name="actel" id="actel">

                <button type="submit" id="idactualizar">Actualizar</button>
            </form>
        </div>
        <div class="modal2">
            <h2 name="eliminar">Eliminar Beneficiario por su folio</h2>
            <form id="form-delete">
                <label for="folio">Folio:</label>
                <input type="text" name="folio" id="folio">
                <button type="submit" id="eliminar">Eliminar</button>
            </form>
        </div>
        <div class="modal3">
            <table id="tabla">
                <thead>
                    <tr>
                        <th>Folio</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Fecha de nacimiento</th>
                        <th>Sexo</th>
                        <th>Codigo postal</th>
                        <th>Curp</th>
                        <th>Estado</th>
                        <th>Municipio</th>
                        <th>Localidad</th>
                        <th>Calle</th>
                        <th>Referencia</th>
                        <th>Email</th>
                        <th>Estado civil</th>
                        <th>Telefono</th>
                    </tr>
                </thead>
                <tbody id="showBene">
                
                </tbody>
            </table>
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