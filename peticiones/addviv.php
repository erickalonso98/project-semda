<?php

    require_once '../includes/conexion.php';

    if(isset($_POST)){
        $fviv = $_POST['fviv'];
        echo $fviv;
        $nomviv = $_POST['nomviv'];
        echo $nomviv;
        $existencia = $_POST['existencia'];
        echo $existencia;
        $dir = $_POST['dir'];
        echo $dir;
        $edoviv = $_POST['edoviv'];
        echo $edoviv;
        $muniviv = $_POST['muniviv'];
        echo $muniviv;
        $fenc = $_POST['fenc'];
        echo $fenc;
        $tpl = $_POST['tpl'];
        echo $tpl;
        $cant = $_POST['cant'];
        echo $cant;

        $sql = "INSERT INTO `viveros`(fvi,novi,Existencia,dir,edo,muni,fenc,tpl,cant)VALUES('$fviv','$nomviv','$existencia','$dir','$edoviv','$muniviv','$fenc','$tpl','$cant')";
        $query = mysqli_query($conn,$sql);

        if(!$query){
            die('fail');
        }

        echo 'succesfully';
    }

?>