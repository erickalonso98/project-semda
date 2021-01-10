
<?php
    require_once '../includes/conexion.php';
    
    $sql = "SELECT * FROM `plantas`";
    $query = mysqli_query($conn,$sql);

    if(!$query){
        die('fail');
    }

    $json = [];

    while($row = mysqli_fetch_array($query)){
        $json[] = [
            'fplant'=>$row['fplant'],
            'nom'=>$row['nom'],
            'medsie'=>$row['medsie'],
            'exist'=>$row['exist'],
            'fvi'=>$row['fvi'],
            'fben'=>$row['fben']
        ];
    }

    $json_query = json_encode($json);
    echo $json_query;
?>