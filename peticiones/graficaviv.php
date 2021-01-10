<?php

    require_once '../includes/conexion.php';

    $sql = "SELECT viveros.novi,SUM(viveros.Existencia) AS total FROM `viveros` GROUP BY viveros.novi ORDER BY SUM(viveros.Existencia) ASC;";
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