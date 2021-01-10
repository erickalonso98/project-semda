<?php 
    require_once '../includes/conexion.php';

    $sql = "SELECT fpro,nuhec,dir,edo,muni,loc,fben FROM `propiedad`";
    $query = mysqli_query($conn,$sql);
    
    if(!$query){
        die('fail');
    }
    
    $json = [];
    while($row = mysqli_fetch_array($query)){
        $json[] = [
            'fpro'=>$row['fpro'],
            'nuhec'=>$row['nuhec'],
            'dir'=>$row['dir'],
            'edo'=>$row['edo'],
            'muni'=>$row['muni'],
            'loc'=>$row['loc'],
            'fben'=>$row['fben']
        ];
    }

    $json_query = json_encode($json);
    echo $json_query;
   
?>