<?php require_once '../includes/conexion.php'; ?>
<?php 
    if(isset($_POST)){
        $fplant = $_POST['fplant'];
        echo $fplant;
        $nom = $_POST['nom'];
        echo $nom;
        $medsie = $_POST['medsie'];
        echo $medsie;
        $exist = $_POST['exist'];
        echo $exist;
        $fvi = $_POST['fvi'];
        echo $fvi;
        $fbene = $_POST['fbene'];
        echo $fbene;

        $sql = "INSERT INTO `plantas`(fplant,nom,medsie,exist,fvi,fben)VALUES('$fplant','$nom','$medsie','$exist','$fvi','$fbene')";
        $query = mysqli_query($conn,$sql);
        if(!$query){
            die('fail');
        }

        echo 'sucessfully';
    }
?>