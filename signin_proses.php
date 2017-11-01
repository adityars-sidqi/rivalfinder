<?php
  session_start();
  include_once 'config/koneksi.php';

  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $query = "SELECT * FROM clubs WHERE email = '$email' AND password = '$password'";

  $result = mysqli_query($conn, $query);
  $count = mysqli_num_rows($result);
  $club = mysqli_fetch_array($result,MYSQLI_ASSOC);

    if($count == 1) {
      $_SESSION['id_club'] = $club['id_club'];
      $_SESSION['name'] = $club['name'];
      echo "<script>alert('Signin success.');
      window.location.href='home.php';
      </script>";
    }else {
      echo "<script>alert('Signin fail! Check your password or email!');
      window.location.href='signin.php';
      </script>";
    }
?>
