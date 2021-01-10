<?php require_once '../includes/conexion.php'; ?>
<?php 
    if(isset($_POST['fben'])){
        $fben = $_POST['fben'];
        echo $fben;
        $nom = $_POST['nom'];
        echo $nom;
        $ap = $_POST['ap'];
        echo $ap;
        $am = $_POST['am'];
        echo $am;
        $fnac = $_POST['fnac'];
        echo $fnac;
        $sexo = $_POST['sexo'];
        echo $sexo;
        $cp = $_POST['cp'];
        echo $cp;
        $curp = $_POST['curp'];
        echo $curp;
        $edo = $_POST['edo'];
        echo $edo;
        $muni = $_POST['muni'];
        echo $muni;
        $loc = $_POST['loc'];
        echo $loc;
        $calle = $_POST['calle'];
        echo $calle;
        $ref = $_POST['ref'];
        echo $ref;
        $email = $_POST['email'];
        echo $email;
        $ecivil = $_POST['ecivil'];
        echo $ecivil;
        $tel = $_POST['tel'];
        echo $tel;
       
        $sql = "INSERT into `beneficiados`(fben,nom,ap,am,fnac,sexo,cp,curp,edo,muni,loc,calle,ref,email,ecivil,tel)VALUES('$fben','$nom','$ap','$am','$fnac','$sexo','$cp','$curp','$edo','$muni','$loc','$calle','$ref','$email','$ecivil','$tel')";
        $query = mysqli_query($conn,$sql);
       
        if(!$query){
            die('fail');
        }
        require '../includes/alers.php';
        echo 'data successfully';

    } 
?>