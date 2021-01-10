<?php require_once '../includes/conexion.php'; ?>
<?php 

    if(isset($_POST)){
        
        $folio  = $_POST['acfolio'];
        $nombre = $_POST['acnombre'];
        $ap = $_POST['acpa'];
        $am = $_POST['acam'];
        $fecha = $_POST['acfecha'];
        $sex = $_POST['acsex'];
        $cp = $_POST['accp'];
        $curp = $_POST['accurp'];
        $edo = $_POST['acedo'];
        $muni = $_POST['acmuni'];
        $loc = $_POST['acloc'];
        $calle = $_POST['accalle'];
        $ref = $_POST['acref'];
        $email = $_POST['acemail'];
        $civil = $_POST['acecivil'];
        $tel = $_POST[' actel'];

        $sql = "UPDATE `beneficiados` SET nom='$nombre',ap='$ap',am='$am',fnac='$fecha',sexo='$sex',cp='$cp',curp='$curp',edo='$edo',muni='$muni',loc='$loc',calle='$calle',ref='$ref',email='$email',ecivil='$civil',tel='$tel' WHERE fben = '$folio'";

        $query = mysqli_query($conn,$sql);

        if(!$query){
            die('fail');
        }

        echo 'success';
    }
       
    

?>