<?php
    require_once '../includes/conexion.php';

    if(isset($_POST)){
        $apfpro = $_POST['apfpro'];
        echo $apfpro;
        $apnuhec = $_POST['apnuhec'];
        echo $apnuhec;
        $apdir = $_POST['apdir'];
        echo $apdir;
        $actedo = $_POST['actedo'];
        echo $actedo;
        $apmuni = $_POST['apmuni'];
        echo $apmuni;
        $aploc = $_POST['aploc'];
        echo $aploc;
        $apfben = $_POST['apfben'];
        echo $apfben;

        $sql = "UPDATE `propiedad` SET nuhec='$apnuhec',dir='$apdir',edo='$actedo',muni='$apmuni',loc='$aploc',fben='$apfben' WHERE fpro='$apfpro' ";
        $query = mysqli_query($conn,$sql);

        if(!$query ){
            die('fail');
        }

        echo 'sucess';
    }
?>