<?php
require 'includes/conexion.php';
sleep(3);
session_start();

if(isset($_POST['user'])){
    $user = $_POST['user'];
}

if(isset($_POST['password'])){
    $password = $_POST['password'];
}

$sql = "SELECT user,tipo FROM `login` WHERE user='".$user."' AND password='".$password."'";

$query = mysqli_query($conn,$sql);

if($result = mysqli_fetch_assoc($query)){
    $_SESSION['user'] = $result;
    if(isset($_SESSION['user']['tipo']) =='Admin'){
        header('location:home.php');
    }else{
    require 'includes/alers.php';
    echo '<script type="text/javascript">
            swal.fire({
            title:"error",
             text:"error usuario o contraseña incorrecta"
            });
        </script>';
        sleep(2);
    header('location:index.php');
   
}

}

?>