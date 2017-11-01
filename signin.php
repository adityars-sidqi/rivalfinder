<?php
  session_start();
  if (isset($_SESSION['id_club'])) {
    header("Location: home.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Halaman Signin</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <script src="assets/js/ie-emulation-modes-warning.js"></script>

  </head>
  <style media="screen">
    body{
      background-color: black;
    }
  </style>
  <body>
    <div class="container">
      <div class="row" style="margin-top: 50px">
        <div class="col-md-4 col-md-offset-4">
          <h4 style="color: white">Signin Rivalfinder</h4>
          <hr>
          <form action="signin_proses.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1"><font color="white">Email address</font></label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"><font color="white">Password</font></label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-default">Sign in</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
