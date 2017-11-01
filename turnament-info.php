<?php include_once 'layouts/header.php';?>
<div class="container marketing">
<?php
  include_once 'config/koneksi.php';
  $i=0;
  $jumlahData = 3;

  $query = "SELECT * FROM tournament_info ORDER BY id_tournament DESC";

  $result = mysqli_query($conn, $query);
  $count = mysqli_num_rows($result);
  if ( $count > 0) {
    while ($tournament = mysqli_fetch_array($result)) {
?>
    <?php if ($i++ % $jumlahData == 0) {
      echo "<div class='row'>";
    } ?>

        <div class="col-lg-4">
          <img class="img-circle" src="img/tournament/<?= $tournament['picture']; ?>" alt="Generic placeholder image" width="200" height="200">
          <h2><?= $tournament['tournament_title']; ?></h2>
          <p><a class="btn btn-default" href="tournament.php?id=<?= $tournament['id_tournament']; ?>" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    <?php if ($i % $jumlahData == 0 || $i == $count ) {
      echo "</div>";
    } ?>
<?php
    }
  } else { ?>
  <div class="row" style="margin-bottom:83px">
    <div class="col-md-12">
      <h2 class="text-center text-danger">No data availabe in database!</h2>
    </div>
  </div>
<?php } ?>
</div>
<?php include_once 'layouts/footer.php';?>
