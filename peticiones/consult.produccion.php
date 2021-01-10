<?php 
    require '../includes/conexion.php';
    $query = mysqli_query($conn,"SELECT produccion.fecre AS produccion ,beneficiados.nom AS beneficiados,beneficiados.fben AS beneficiados ,plantas.fplant AS plantas, propiedad.fpro,produccion.canten,produccion.cantco,produccion.cantper FROM produccion INNER JOIN beneficiados ON produccion.fben = beneficiados.fben INNER JOIN plantas ON produccion.fplan = plantas.fplant INNER JOIN propiedad ON produccion.fben = propiedad.fben;");
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