<?php
  include_once '../../config/koneksi.php';

  $id_tournament = $_GET['id'];

  $query = "DELETE FROM tournament_info WHERE id_tournament = $id_tournament";

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
