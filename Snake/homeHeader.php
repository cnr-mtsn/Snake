<?php session_start();?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <link href="http://v4-alpha.getbootstrap.com/examples/signin/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  </head>

  <body style="background-image: url('includes/snake.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">

    <div class="container">
        <nav class=" row navbar navbar-fixed-top navbar-dark bg-faded" style="background-color: black; opacity: 0.6; margin-bottom:10%;">

  						<?php
  							if (isset($_SESSION['username']) && isset($_SESSION['uid'])) {
                  /**** THIS DATA CAN ONLY BE VIEWED WHEN LOGGED IN TO THE WEBSITE *****/
  								echo '<div class="col-lg-6">
                          <a class="navbar-brand" href="home.php">Home</a>
                          <a class="navbar-brand" href="highScores.php" style="color:grey">High Scores</a>
                          <a class="navbar-brand" href="myAccount.php" style="color:grey">My Account</a>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-sm-2">
                          <form class="form-inline" action="inc.logout.php" method="POST">
                            <button type="submit" name="logout" class="btn form-control" style="color:white; background-color:purple; border:none;">Logout</button>
                            </form>
                        </div>';


  							}
                /*^^^^ THIS DATA CAN ONLY BE VIEWED WHEN LOGGED IN TO THE WEBSITE	^^^^*/


                else {
  								echo '<div class="col-lg-6">
                          <a class="navbar-brand" href="home.php">Home</a>
                          <a class="navbar-brand" href="highScores.php" style="color:grey">High Scores</a>
                          <a class="navbar-brand" href="signup.php">Sign Up</a>
                        </div>

                        <form class="was-validated" action="inc.login.php" method="post">

                        <div class="col-md-2">
                          <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                          </div>
                        </div>

                        <div class="col-md-2">
                            <button type="submit" name="login-submit" class="btn" style="background-color:purple; color:white;">Login</button>
                            </form>
                        </div>';
  							}
  						?>

        </nav>
