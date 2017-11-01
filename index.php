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
    <title>Halaman Index</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style media="screen">
    body{
      background-color: black;
    }
  </style>
  <body>
    <div class="container-fluid">
      <img src="assets/img/foto-header.jpg" alt="..."  height="400" width="100%">
      <br><br>
      <center>
        <a class="btn btn-success btn-lg" href="signin.php" role="button">Sign In</a>
        <a class="btn btn-primary btn-lg" href="signup.php" role="button">Sign Up</a>
      </center>

      <hr>
      <footer class="footer">
        <p><font color="white"> &copy; 2017 Rival Finder </font></p>
        <p><font color="white">We will help your team for looking a rival that is compatible with your team</font></p>
        <p><font color="white">In order to improve the mental and the quality of your team futsal game</font></p>
      </footer>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
