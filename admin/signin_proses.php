<?php
  session_start();
  include_once '../config/koneksi.php';

  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

  $result = mysqli_query($conn, $query);
  $count = mysqli_num_rows($result);
  $admin = mysqli_fetch_array($result,MYSQLI_ASSOC);

    if($count == 1) {
      $_SESSION['id_admin'] = $admin['id_admin'];
      $_SESSION['admin_name'] = $admin['admin_name'];

      header("location: index.php");
    }else {
      header("location: signin.php");
    }
?>
