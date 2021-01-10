<?php 

require_once '../includes/conexion.php';
   
$sql = "SELECT * FROM `beneficiados` ";
$query = mysqli_query($conn,$sql);

if(!$query){
    die('fail');
}

$json = [];
while($row = mysqli_fetch_array($query)){
    $json[] = [
        'fben'=>$row['fben'],
        'nom'=>$row['nom'],
        'ap'=>$row['ap'],
        'am'=>$row['am'],
        'fnac'=>$row['fnac'],
        'sexo'=>$row['sexo'],
        'cp'=>$row['cp'],
        'curp'=>$row['curp'],
        'edo'=>$row['edo'],
        'muni'=>$row['muni'],
        'loc'=>$row['loc'],
        'calle'=>$row['calle'],
        'ref'=>$row['ref'],
        'email'=>$row['email'],
        'ecivil'=>$row['ecivil'],
        'tel'=>$row['tel']
    ];
}

$json_query = json_encode($json);
echo $json_query;

?>