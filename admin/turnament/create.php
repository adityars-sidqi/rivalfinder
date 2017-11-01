<?php include_once '../layouts/header.php'; ?>
<?php include_once '../layouts/sidebar.php'; ?>

<h1 class="page-header">Create Tournament</h1>
<form class="form-horizontal" action="create_proses.php" method="post" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="tournament_title" class="col-sm-2 control-label">Tournament Title</label>
    <div class="col-sm-4">
      <input type="text" name="tournament_title" class="form-control" id="tournament_title" placeholder="Tournament Title">
    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-9">
      <textarea name="description" id="description" rows="8" class="form-control" placeholder="Description"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="contact_person" class="col-sm-2 control-label">Contact Person</label>
    <div class="col-sm-4">
      <input type="text" name="contact_person" class="form-control" id="contact_person" placeholder="Contact Person">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPicture" class="col-sm-2 control-label">Picture</label>
    <div class="col-sm-4">
      <input type="file" name="file" class="form-control" id="inputPicture">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>
</form>

<?php include_once '../layouts/footer.php'; ?>
