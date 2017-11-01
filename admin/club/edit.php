<?php include_once '../../config/koneksi.php'; ?>
<?php include_once '../layouts/header.php'; ?>
<?php include_once '../layouts/sidebar.php'; ?>
<?php
  $id_club = $_GET['id'];
  $query = "SELECT * FROM clubs WHERE id_club = $id_club";

  $result = mysqli_query($conn, $query);

  while ($club = mysqli_fetch_array($result)) {
?>
  <h1 class="page-header">Edit Club</h1>
  <form class="form-horizontal" action="edit_proses.php" method="post">
    <div class="form-group">
      <label for="inputName" class="col-sm-2 control-label">Name</label>
      <div class="col-sm-4">
        <input type="hidden" name="id_club" value="<?= $club['id_club']; ?>" readonly>
        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" value="<?= $club['name']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputContact" class="col-sm-2 control-label">Contact</label>
      <div class="col-sm-4">
        <input type="text" name="contact" class="form-control" id="inputContact" placeholder="Contact" value="<?= $club['contact']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-sm-2 control-label">Email</label>
      <div class="col-sm-4">
        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="<?= $club['email']; ?>">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
    </div>
  </form>
<?php } ?>
<?php include_once '../layouts/footer.php'; ?>
