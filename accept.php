<?php
  session_start();
  include_once 'config/koneksi.php';

  $id_challenge = $_GET['id'];

  $querySelect = "SELECT * FROM challenges WHERE id_challenge = $id_challenge";
  $resultSelect = mysqli_query($conn, $querySelect);

  while ($challenge = mysqli_fetch_array($resultSelect)) {
    $queryUpdate = "UPDATE challenges SET status = 'Accept' WHERE id_challenge = $id_challenge";

    $resultUpdate = mysqli_query($conn, $queryUpdate);
    if($resultUpdate) {
      $idClubHome = $challenge['id_club_home'];
      $idClubAway = $challenge['id_club_away'];
      $queryClubHome = "UPDATE clubs SET status = 'Unavailable' WHERE id_club = $idClubHome";
      $queryClubAway = "UPDATE clubs SET status = 'Unavailable' WHERE id_club = $idClubAway";
      $resultUpdateHome = mysqli_query($conn, $queryClubHome);
      $resultUpdateAway = mysqli_query($conn, $queryClubAway);

      if($resultUpdateHome && $resultUpdateAway) {
        echo "<script>alert('Success Accept Challenge.');
        window.location.href='challenge-history.php';
        </script>";
      } else {
        echo "<script>alert('Failed! Please do it again.');
        window.location.href='challenge-history.php';
        </script>";
      }
    } else {
      echo "<script>alert('Failed! Please do it again.');
      window.location.href='challenge-history.php';
      </script>";
    }
  }
?>
