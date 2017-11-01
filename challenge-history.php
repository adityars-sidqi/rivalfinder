<?php include_once 'layouts/header.php';?>
<?php
  include_once 'config/koneksi.php';
  $id_club = $_SESSION['id_club'];

  $queryIncoming = "SELECT * FROM challenges WHERE id_club_away = $id_club";
  $queryOutgoing = "SELECT * FROM challenges WHERE id_club_home = $id_club";

  $resultIncoming = mysqli_query($conn, $queryIncoming);
  $resultOutgoing = mysqli_query($conn, $queryOutgoing);
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Challenge History</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <h3 class="page-header">Incoming challenge</h3>
        <table id="challenge-history-incoming" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
                <th>ID</th>
                <th>Name Club</th>
                <th>Contact Person</th>
                <th>Place</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($challengeIncoming = mysqli_fetch_array($resultIncoming)) { ?>
              <?php
                $idClubIncoming = $challengeIncoming['id_club_home'];
                $queryClubIncoming = "SELECT * FROM clubs WHERE id_club = $idClubIncoming";

                $resultClubIncoming = mysqli_query($conn, $queryClubIncoming);
               ?>
              <tr>
                <td><?= $challengeIncoming['id_challenge']; ?></td>
                <?php while ($clubIncoming = mysqli_fetch_array($resultClubIncoming)) { ?>
                  <td><?= $clubIncoming['name']; ?></td>
                  <td><?= $clubIncoming['contact']; ?></td>
                <?php } ?>
                <td><?= $challengeIncoming['place']; ?></td>
                <?php $dateIncoming = date_create($challengeIncoming['date']); ?>
                <td><?= date_format($dateIncoming, "D, d M Y"); ?></td>
                <td>
                  <center>
                    <?php if($challengeIncoming['status'] == 'Accept') { ?>
                      <a href="#" class="btn btn-sm btn-success"><?= $challengeIncoming['status']; ?></a>
                    <?php } else if($challengeIncoming['status'] == 'Decline') { ?>
                      <a href="#" class="btn btn-sm btn-danger"><?= $challengeIncoming['status']; ?></a>
                    <?php } else { ?>
                      <a href="accept.php?id=<?= $challengeIncoming['id_challenge']; ?>" class="btn btn-sm btn-success">Accept</a>
                      <a href="decline.php?id=<?= $challengeIncoming['id_challenge']; ?>" class="btn btn-sm btn-danger">Decline</a>
                    <?php } ?>
                  </center>
                  </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <h3 class="page-header">Outgoing challenge</h3>
        <table id="challenge-history-outgoing" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
                <th>ID</th>
                <th>Name Club</th>
                <th>Contact Person</th>
                <th>Place</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($challengeOutgoing = mysqli_fetch_array($resultOutgoing)) { ?>
              <?php
                $idClubOutgoing = $challengeOutgoing['id_club_away'];
                $queryClubOutgoing = "SELECT * FROM clubs WHERE id_club = $idClubOutgoing";

                $resultClubOutgoing = mysqli_query($conn, $queryClubOutgoing);
               ?>
              <tr>
                <td><?= $challengeOutgoing['id_challenge']; ?></td>
                <?php while ($clubOutgoing = mysqli_fetch_array($resultClubOutgoing)) { ?>
                  <td><?= $clubOutgoing['name']; ?></td>
                  <td><?= $clubOutgoing['contact']; ?></td>
                <?php } ?>
                <td><?= $challengeOutgoing['place']; ?></td>
                <?php $dateOutgoing = date_create($challengeOutgoing['date']); ?>
                <td><?= date_format($dateOutgoing, "D, d M Y"); ?></td>
                <td>
                  <?php if ($challengeOutgoing['status'] == 'Accept') {
                    echo "<a href='#' class='btn btn-success btn-xs'>".$challengeOutgoing['status']."</a>";
                  } else if($challengeOutgoing['status'] == 'Waiting Response') {
                    echo "<a href='#' class='btn btn-warning btn-xs'>".$challengeOutgoing['status']."</a>";
                  } else {
                    echo "<a href='#' class='btn btn-danger btn-xs'>".$challengeOutgoing['status']."</a>";
                  }
                ?>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


<?php include_once 'layouts/footer.php';?>
