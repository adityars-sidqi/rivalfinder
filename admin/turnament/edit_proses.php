<?php
  include_once '../../config/koneksi.php';

  $id_tournament = $_POST['id_tournament'];
  $tournament_title = $_POST['tournament_title'];
  $description = $_POST['description'];
  $contact_person = $_POST['contact_person'];

  if ($tournament_title == "" || $description == "" || $contact_person == "") {
    echo "<script>alert('Data tidak boleh ada yang kosong!');
    window.location.href='create.php';
    </script>";
  } else {
    $query = "UPDATE tournament_info SET tournament_title = '".$tournament_title."', description = '".$description."', contact_person = '".$contact_person."' WHERE id_tournament = $id_tournament";

    $result = mysqli_query($conn, $query);
    if($result) {
      echo "<script>alert('Data berhasil diupdate.');
      window.location.href='index.php';
      </script>";
    } else {
      echo "<script>alert('Data gagal diupdate!');
      window.location.href='edit.php?id=$id_tournament';
      </script>";
    }
  }
?>
