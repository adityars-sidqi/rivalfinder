<?php include_once '../../config/koneksi.php'; ?>
<?php include_once '../layouts/header.php'; ?>
<?php include_once '../layouts/sidebar.php'; ?>
<?php
  $id_tournament = $_GET['id'];
  $query = "SELECT * FROM tournament_info WHERE id_tournament = $id_tournament";

  $result = mysqli_query($conn, $query);

  while ($tournament = mysqli_fetch_array($result)) {
?>
<h1 class="page-header">Edit Tournament</h1>
<form class="form-horizontal" action="edit_proses.php" method="post" >
  <div class="form-group">
    <label for="tournament_title" class="col-sm-2 control-label">Tournament Title</label>
    <div class="col-sm-4">
      <input type="hidden" name="id_tournament" value="<?= $id_tournament; ?>" readonly>
      <input type="text" name="tournament_title" class="form-control" id="tournament_title" value="<?= $tournament['tournament_title']; ?>" placeholder="Tournament Title">
    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-9">
      <textarea name="description" id="description" rows="8" class="form-control" placeholder="Description"><?= $tournament['description']; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="contact_person" class="col-sm-2 control-label">Contact Person</label>
    <div class="col-sm-4">
      <input type="text" name="contact_person" class="form-control" id="contact_person" value="<?= $tournament['contact_person']; ?>" placeholder="Contact Person">
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
