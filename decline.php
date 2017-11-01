<?php
  session_start();
  include_once 'config/koneksi.php';

  $id_challenge = $_GET['id'];

  $queryUpdate = "UPDATE challenges SET status = 'Decline' WHERE id_challenge = $id_challenge";

  $result = mysqli_query($conn, $queryUpdate);

  if($result) {
    echo "<script>alert('Success Decline Challenge.');
    window.location.href='challenge-history.php';
    </script>";
  } else {
    echo "<script>alert('Failed! Please do it again.');
    window.location.href='challenge-history.php';
    </script>";
  }
?>
