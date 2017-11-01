<?php include_once '../layouts/header.php'; ?>
<?php include_once '../layouts/sidebar.php'; ?>
<?php include_once '../../config/koneksi.php'; ?>

  <h1 class="page-header">Tournament</h1>
  <a href="create.php" class="btn btn-primary">Create</a>
  <table id="turnament" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
          <tr>
              <th>ID</th>
              <th>Tournament Title</th>
              <th>Description</th>
              <th>Contact Person</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
        <?php
          $query = "SELECT * FROM tournament_info";
          $result = mysqli_query($conn, $query);

          while ($tournament = mysqli_fetch_array($result)) {
         ?>
          <tr>
            <td><?= $tournament['id_tournament']; ?></td>
            <td><?= $tournament['tournament_title']; ?></td>
            <td><?=  htmlentities(substr($tournament['description'], 0, 50)); ?></td>
            <td><?= $tournament['contact_person']; ?></td>
            <td>
              <center>
                <a href="edit.php?id=<?= $tournament['id_tournament']; ?>" class="btn btn-success">Edit</a>
                <a href="delete.php?id=<?= $tournament['id_tournament']; ?>" class="btn btn-danger">Delete</a>
              </center>
            </td>
          </tr>
        <?php } ?>
      </tbody>
  </table>
<?php include_once '../layouts/footer.php'; ?>
