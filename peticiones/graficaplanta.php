<?php require '../includes/conexion.php'; ?>
<?php 

    $sql = "SELECT plantas.nom,SUM(plantas.exist) AS total FROM `plantas` GROUP BY plantas.nom ORDER BY SUM(plantas.exist) ASC;";
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