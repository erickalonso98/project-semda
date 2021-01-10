<?php require_once '../includes/conexion.php'; ?>
<?php 

    if(isset($_POST['folio'])){
        $folio = $_POST['folio'];
        echo $folio;

        $sql = "DELETE FROM `beneficiados` WHERE fben='$folio'";
        $query = mysqli_query($conn,$sql);

        if(!$query){
            die('fail');
        }

        echo 'success';
    }

?>