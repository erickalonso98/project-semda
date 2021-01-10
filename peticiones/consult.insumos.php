<?php 

    require_once '../includes/conexion.php';
    $sql = "SELECT * FROM `insumos`";
    $query = mysqli_query($conn,$sql);

    if(!$query){
        die('fail');
    }

    $json = [];

    while($row = mysqli_fetch_array($query)){
        $json[] = [
            'ni'=>$row['ni'],
            'fve'=>$row['fve'],
            'fch'=>$row['fch'],
            'hra'=>$row['hra'],
            'mat'=>$row['mat'],
            'deta'=>$row['deta'],
            'marc'=>$row['marc'],
            'cant'=>$row['cant']
        ];
    }

    $json_query = json_encode($json);
    echo $json_query;
?>