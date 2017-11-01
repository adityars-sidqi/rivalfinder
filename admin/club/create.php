<?php include_once '../layouts/header.php'; ?>
<?php include_once '../layouts/sidebar.php'; ?>

  <h1 class="page-header">Create Club</h1>
  <form class="form-horizontal" action="create_proses.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="inputName" class="col-sm-2 control-label">Name</label>
      <div class="col-sm-4">
        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
      </div>
    </div>
    <div class="form-group">
      <label for="inputContact" class="col-sm-2 control-label">Contact</label>
      <div class="col-sm-4">
        <input type="text" name="contact" class="form-control" id="inputContact" placeholder="Contact">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-sm-2 control-label">Email</label>
      <div class="col-sm-4">
        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-sm-2 control-label">Password</label>
      <div class="col-sm-4">
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <label for="inputLogo" class="col-sm-2 control-label">Logo</label>
      <div class="col-sm-4">
        <input type="file" name="file" class="form-control" id="inputLogo">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </div>
  </form>
<?php include_once '../layouts/footer.php'; ?>
