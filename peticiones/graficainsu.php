<?php

    require_once '../includes/conexion.php';
    $sql = "SELECT insumos.mat,SUM(insumos.cant) AS total FROM `insumos`GROUP BY insumos.mat ORDER BY SUM(insumos.cant) ASC ";
    $query = mysqli_query($conn,$sql);
    $json = [];
    if(!$query){
        die('fail');
    }else{
        foreach($query as $result){
            $json[] = $result;
        }

        $json_query = json_encode($json);
        echo $json_query;
    }

?>