<?php include_once 'layouts/header.php';?>
  <div class="container">
    <div class="row" style="margin-bottom: 30px">
      <div class="col-sm-12">
        <h1 class="page-header">List of clubs that can challenge</h1>
      </div>
    </div>
    <?php
      include_once 'config/koneksi.php';
      $i=0;
      $jumlahData = 4;

      $query = "SELECT * FROM clubs ORDER BY status";

      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);

      if ($count > 0) {
        while ($club = mysqli_fetch_array($result)) {
          if ($i++ % $jumlahData == 0) {
            echo "<div class='row'>";
          }
    ?>
            <div class="col-sm-3">
              <center>
                <img class="img-thumbnail" src="img/club/logo/<?= $club['logo']; ?>" width="200" height="200">
              </center>
              <h3><?= $club['name']; ?></h3>
              <p>Contact Person : <em><?= $club['contact']; ?></em></p>
              <p>Status : <a href="#" class="btn btn-xs <?php if ($club['status'] == 'Available') { echo 'btn-success'; } else { echo 'btn-danger'; }?>"><?= $club['status']; ?></a></p>
              <p><a href="challenge.php?id=<?= $club['id_club']; ?>" class="btn btn-default" <?php if ($club['status'] != 'Available') { echo "disabled='disabled'"; }?>>Challenge</a></p>
            </div>
            <?php if ($i % $jumlahData == 0 || $i == $count ) {
              echo "</div>";
            } ?>
    <?php
        }
      } else {
    ?>
          <div class="row" style="margin-bottom:83px">
            <div class="col-md-12">
              <h2 class="text-center text-danger">No data availabe in database!</h2>
            </div>
          </div>
    <?php } ?>
  </div>
<?php include_once 'layouts/footer.php';?>
