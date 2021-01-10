<?php 

    require_once '../includes/conexion.php';

    if(isset($_POST)){
        $upviv = $_POST['upviv'];
        echo $upviv;
        $upnom = $_POST['upnom'];
        echo $upnom;
        $upexistencia = $_POST['upexistencia'];
        echo $upexistencia;
        $updir = $_POST['updir'];
        echo $updir;
        $upedoviv = $_POST['upedoviv'];
        echo $upedoviv;
        $upmuniviv = $_POST['upmuniviv'];
        echo $upmuniviv;
        $upfenc = $_POST['upfenc'];
        echo $upfenc;
        $uptpl = $_POST['uptpl'];
        echo $uptpl;
        $upcant = $_POST['upcant'];
        echo $upcant;

        $sql = "UPDATE `viveros` SET novi='$upnom',Existencia='$upexistencia',dir='$updir',edo='$upedoviv',muni='$upmuniviv',fenc='$upfenc',tpl='$uptpl',cant='$upcant' WHERE fvi='$upviv'";

        $query = mysqli_query($conn,$sql);

        if(!$query){
            die('fail');
        }

        echo 'success';
    }

?>