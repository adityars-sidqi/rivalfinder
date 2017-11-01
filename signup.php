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
    <title>Halaman Signup</title>

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
      <h1><font color="white">Sign Up Rival Finder</font></h1>
      <hr>
      <form action="signup_proses.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputUsername1"><font color="white">Name Club</font></label>
          <input type="text" name="name" class="form-control" id="exampleInputUsername1" placeholder="Name Club">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword(confirm)1"><font color="white">Contact Person</font></label>
          <input type="text" name="contact" class="form-control" id="exampleInputPassword(confirm)1" placeholder="Contact Person">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1"><font color="white">Email address</font></label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1"><font color="white">Password</font></label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputFile"><font color="white">Logo Club</font></label>
          <input type="file" name="file" id="exampleInputFile">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </body>
</html>
