<?php require_once '../includes/conexion.php'; ?>
<?php 
    if(isset($_POST)){
        $eliplant = $_POST['eliplant'];
        $sql = "DELETE FROM `plantas` WHERE fplant='$eliplant' ";
        $query = mysqli_query($conn,$sql);

        if(!$query){
            die('fail');
        }

        echo 'success';
    }
?>