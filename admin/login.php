<?php 
    require "config/database.php";
    $sql = "select * from nhanvien";
    $result = mysqli_query($conn,$sql);
    
?>
