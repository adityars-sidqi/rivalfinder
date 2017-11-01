<?php include_once 'layouts/header.php';?>
<?php include_once 'config/koneksi.php'; ?>
<?php
  $id_tournament = $_GET['id'];

  $query = "SELECT * FROM tournament_info WHERE id_tournament = $id_tournament";

  $result = mysqli_query($conn, $query);

  while ($tournament = mysqli_fetch_array($result)) {
?>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 visible-xs">
          <img src="img/tournament/<?= $tournament['picture']; ?>" alt="">
        </div>
        <div class="col-md-3 col-sm-4 hidden-xs">
          <img src="img/tournament/<?= $tournament['picture']; ?>" class="img-responsive" alt="">
        </div>

        <div class="col-md-9">
          <h1><?= $tournament['tournament_title']; ?></h1>
          <div>
            <table class="table table-borderless" >
                <tbody>
                  <tr>
                    <td>Description</td>
                    <td> : </td>
                    <td>
                      <?= $tournament['description']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Contact Person</td>
                    <td> : </td>
                    <td>
                      <?= $tournament['contact_person'];?>
                    </td>
                  </tr>

                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
<?php } ?>
<?php include_once 'layouts/footer.php';?>
