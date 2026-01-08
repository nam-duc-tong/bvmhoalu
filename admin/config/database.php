<?php
    $host= "localhost";
    $user = "root";
    $pass = "";
    $dbname = "test";

    $conn = mysqli_connect($host,$user,$pass,$dbname);
    if(!$conn){
        die("Ket noi that bai: ".mysqli_connect_error());
    }
?>