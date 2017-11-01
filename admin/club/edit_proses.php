<?php
  include_once '../../config/koneksi.php';

  $id_club = $_POST['id_club'];
  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];

  if ($name == "" || $contact == "" || $email == "") {
    echo "<script>alert('Data tidak boleh ada yang kosong!');
    window.location.href='create.php';
    </script>";
  } else {
    $query = "UPDATE clubs SET email = '".$email."', name = '".$name."', contact = '".$contact."' WHERE id_club = $id_club";

    $result = mysqli_query($conn, $query);
    if($result) {
      echo "<script>alert('Data berhasil diupdate.');
      window.location.href='index.php';
      </script>";
    } else {
      echo "<script>alert('Data gagal diupdate!');
      window.location.href='edit.php?id=$id_club';
      </script>";
    }
  }
?>
