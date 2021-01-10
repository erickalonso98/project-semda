<?php

    require_once '../includes/conexion.php';

    if(isset($_POST)){
        $ni = $_POST['ni'];
        echo $ni;
        $fve = $_POST['fve'];
        echo $fve;
        $fch = $_POST['fch'];
        echo $fch;
        $hra = $_POST['hra'];
        echo $hra;
        $mat = $_POST['mat'];
        echo $mat;
        $deta = $_POST['deta'];
        echo $deta;
        $marc = $_POST['marc'];
        echo $marc;
        $cant = $_POST['cant'];
        echo $cant;

        $sql = "INSERT INTO `insumos`(ni,fve,fch,hra,mat,deta,marc,cant)VALUES('$ni','$fve','$fch','$hra','$mat','$deta','$marc','$cant')";
        $query = mysqli_query($conn,$sql);
        if(!$query){
            die('fail');
        }

        echo 'sucess';
    }

?>