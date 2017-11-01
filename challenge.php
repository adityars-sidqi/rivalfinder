<?php include_once 'layouts/header.php';?>

<?php
  include_once 'config/koneksi.php';
  $id_club_away = $_GET['id'];
  $id_club_home = $_SESSION['id_club'];

  if ($id_club_home == $id_club_away) {
    echo "<script>alert('Can\'t challenge your own club');
    window.location.href='home.php';
    </script>";
  }
  $queryHome = "SELECT * FROM clubs WHERE id_club = $id_club_home";
  $queryAway = "SELECT * FROM clubs WHERE id_club = $id_club_away";

  $resultHome = mysqli_query($conn, $queryHome);
  $resultAway = mysqli_query($conn, $queryAway);
?>
<div class="container">
  <div class="row">
    <div class="col-sm-5">
      <?php while ($clubHome = mysqli_fetch_array($resultHome)) { ?>
        <h1 class="text-center" style="margin-bottom: 30px">Home Club</h1>
        <center>
          <img class="img-thumbnail" src="img/club/logo/<?= $clubHome['logo']; ?>" width="200" height="200">
        </center>
        <h3 class="text-center"><?= $clubHome['name'];?></h3>
        <p><h5 class="text-center">Contact Person : <em><?= $clubHome['contact'];?></em></h5></p>
      <?php } ?>
    </div>
    <div class="col-sm-2" style="padding-top: 130px">
      <h1 class="text-center"><em>VS</em></h1>
    </div>
    <div class="col-sm-5">
      <?php while ($clubAway = mysqli_fetch_array($resultAway)) { ?>
        <h1 class="text-center" style="margin-bottom: 30px">Away Club</h1>
        <center>
          <img class="img-thumbnail" src="img/club/logo/<?= $clubAway['logo']; ?>" width="200" height="200">
        </center>
        <h4 class="text-center"><?= $clubAway['name'];?></h4>
        <p><h5 class="text-center">Contact Person : <em><?= $clubAway['contact'];?></em></h5></p>
      <?php } ?>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <h2 class="page-header">Challenge Information</h2>
      <form class="form-horizontal" action="challenge_proses.php" method="post">
        <div class="form-group">
          <label for="inputPlace" class="col-sm-2 control-label">Place</label>
          <div class="col-sm-10">
            <input type="hidden" name="id_club_away" value="<?= $id_club_away; ?>" readonly>
            <input type="text" name="place" class="form-control" id="inputPlace" placeholder="Place">
          </div>
        </div>
        <div class="form-group">
          <label for="inputDate" class="col-sm-2 control-label">Date</label>
          <div class="col-sm-3">
            <input type="date" name="date" class="form-control" id="inputDate">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Challenge</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include_once 'layouts/footer.php';?>
