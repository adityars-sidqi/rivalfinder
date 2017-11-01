<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "rivalfinder";

    $conn = mysqli_connect($host, $user, $password, $dbname);
    if(!$conn){
      die("Connnection failed: " . mysqli_connect_error());
    }
 ?>
