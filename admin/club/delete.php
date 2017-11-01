<?php
  include_once '../../config/koneksi.php';

  $id_club = $_GET['id'];

  $query = "DELETE FROM clubs WHERE id_club = $id_club";

  $result = mysqli_query($conn, $query);

  if($result){
    echo "<script>alert('Data berhasil dihapus!');
    window.location.href='index.php';
    </script>";
  } else {
    echo "<script>alert('Data gagal dihapus!');
    window.location.href='index.php';
    </script>";
  }
 ?>
