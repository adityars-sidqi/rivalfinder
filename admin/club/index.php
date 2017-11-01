<?php include_once '../layouts/header.php'; ?>
<?php include_once '../layouts/sidebar.php'; ?>
<?php include_once '../../config/koneksi.php'; ?>

    <h1 class="page-header">Club</h1>
    <a href="create.php" class="btn btn-primary">Create</a>
    <table id="club" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Password</th>
                <th>Logo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php
            $query = "SELECT * FROM clubs";
            $result = mysqli_query($conn, $query);

            while ($club = mysqli_fetch_array($result)) {
           ?>
            <tr>
              <td><?= $club['id_club']; ?></td>
              <td><?= $club['name']; ?></td>
              <td><?= $club['contact']; ?></td>
              <td><?= $club['email']; ?></td>
              <td><?= substr($club['password'], 0, 10); ?></td>
              <td><?= $club['logo']; ?></td>
              <td>
                <center>
                  <a href="edit.php?id=<?= $club['id_club']; ?>" class="btn btn-success">Edit</a>
                  <a href="delete.php?id=<?= $club['id_club']; ?>" class="btn btn-danger">Delete</a>
                </center>
              </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
<?php include_once '../layouts/footer.php'; ?>
