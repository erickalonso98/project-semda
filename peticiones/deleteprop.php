<?php 
    require_once '../includes/conexion.php';

    if(isset($_POST)){
        $delfpro = $_POST['delfpro'];

        $sql = "DELETE FROM `propiedad` WHERE fpro='$delfpro'";
        $query = mysqli_query($conn,$sql);

        if(!$query){
            die('fail');
        }

        echo 'success';
    }

?>