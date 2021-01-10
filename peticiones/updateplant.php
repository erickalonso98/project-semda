<?php require_once '../includes/conexion.php'; ?>
<?php 

    if(isset($_POST)){

        $acplant = $_POST['acplant'];
        $acnomplant = $_POST['acnomplant'];
        $acmedsie = $_POST['acmedsie'];
        $acexist = $_POST['acexist'];
        $acviv = $_POST['acviv'];
        $actben = $_POST['actben'];
        

        $sql = "UPDATE `plantas` SET nom='$acnomplant', medsie='$acmedsie' , exist='$acexist',fvi='$acviv',fben='$actben' WHERE fplant='$acplant';";
        $query = mysqli_query($conn,$sql);

        if(!$query){
            die('fail');
        }
        echo 'success';
    }
    
  
?>