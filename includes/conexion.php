<?php

    $server = "localhost";
    $root = "root";
    $password = "";
    $database = "sembra";

    try{
        $conn = mysqli_connect($server,$root,$password,$database);
    }catch(Exception $e){
        die('error->'. $e->getMessage());
    }

?>