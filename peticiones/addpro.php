<?php

    require_once '../includes/conexion.php';

    if(isset($_POST)){
        $fpro = $_POST['fpro'];
      
        $nuhec = $_POST['nuhec'];
   
        $dir = $_POST['dir'];
      
        $edo = $_POST['edo'];
  
        $muni = $_POST['muni'];
    
        $loc = $_POST['loc'];
    
        $fben = $_POST['fben'];

        $sql = "INSERT INTO `propiedad`(fpro,nuhec,dir,edo,muni,loc,fben)VALUES('$fpro','$nuhec','$dir','$edo','$muni','$loc','$fben')";
        $query = mysqli_query($conn,$sql);

        if(!$query){
            die('fail');
        }
        echo 'success';
     
    }

?>