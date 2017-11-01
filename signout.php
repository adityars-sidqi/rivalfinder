<?php
  session_start();

  if(session_destroy()) {
    echo "<script>alert('Signout success.');
    window.location.href='index.php';
    </script>";
   }
?>
