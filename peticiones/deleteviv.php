<?php 

    require_once '../includes/conexion.php';

    if(isset($_POST)){
        $elimviv = $_POST['elimviv'];
        echo $elimviv;

        $sql = "DELETE FROM `viveros` WHERE fvi='$elimviv'";
        $query = mysqli_query($conn,$sql);

        if(!$query){
            die('fail');
        }

        echo 'success';
    }

?>