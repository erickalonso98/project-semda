<?php 

    require_once '../includes/conexion.php';

    $sql = "SELECT * FROM `viveros`";
    $query = mysqli_query($conn,$sql);

    if(!$query){
        die('fail');
    }

    $json = [];

    while($row = mysqli_fetch_array($query)){
        $json[] = [
            'fvi'=>$row['fvi'],
            'novi'=>$row['novi'],
            'Existencia'=>$row['Existencia'],
            'dir'=>$row['dir'],
            'edo'=>$row['edo'],
            'muni'=>$row['muni'],
            'fenc'=>$row['fenc'],
            'tpl'=>$row['tpl'],
            'cant'=>$row['cant']
        ];
    }

    $json_query = json_encode($json);
    echo $json_query;
?>