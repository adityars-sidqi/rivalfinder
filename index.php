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

    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

      <div class="landing">
        <!-- link gambar pindah di properti css landing -->
        <div class="landing-text">
          <h1>RivalFinder</h1>
          <h3>
            We will help your team for looking a rival that is compatible with your team
            <br>
            In order to improve the mental and the quality of your team futsal game
          </h3>
          <a class="btn btn-landing btn-lg" href="signin.php" role="button">Sign In</a>
          <a class="btn btn-landing btn-lg" href="signup.php" role="button">Sign Up</a>
        </div>
      </div>

      <footer>
        <p>&copy; 2017 Rival Finder</p>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
