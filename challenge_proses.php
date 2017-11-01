<?php
  session_start();
  include_once 'config/koneksi.php';

  $id_club_home = $_SESSION['id_club'];
  $id_club_away = $_POST['id_club_away'];
  $place = $_POST['place'];
  $date = $_POST['date'];

  if ($place == "" || $date == "") {
    echo "<script>alert('No data can be empty!');
    window.location.href='challenge.php?id=$id_club_away';
    </script>";
  }

  $query = "INSERT INTO challenges VALUES (NULL, $id_club_home, $id_club_away, '$date', '$place', 'Waiting Response')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "<script>alert('Request for challenges have been successful. Go to History Challenge Page to see status.');
    window.location.href='challenge-history.php';
    </script>";
  }

?>
