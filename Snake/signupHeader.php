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
        <nav class=" row navbar navbar-fixed-top navbar-dark bg-faded" style="background-color: black; opacity: 0.6;">

						<?php
							if (isset($_SESSION['username']) && isset($_SESSION['uid'])) {
                /**** THIS DATA CAN ONLY BE VIEWED WHEN LOGGED IN TO THE WEBSITE *****/
								echo '<div class="col-lg-1">
                        <a class="navbar-brand" href="home.php">Home</a>
                      </div>
                      <div class="col-lg-2">
                        <a class="navbar-brand" href="highScores.php" style="color:grey">High Scores</a>
                      </div>
                      <div class="col-md-7"></div>
                      <div class="col-sm-2">
                        <form class="form-inline" action="inc.logout.php" method="POST">
                          <button type="submit" name="logout" class="btn form-control" style="color:white; background-color:purple; border:none;">Logout</button>
                          </form>
                      </div>';


							}
              /*^^^^ THIS DATA CAN ONLY BE VIEWED WHEN LOGGED IN TO THE WEBSITE	^^^^*/


              else {
								echo '<div class="col-lg-4 responsive" style="margin-left; 3%;">
                        <a class="navbar-brand" href="home.php">Home</a>
                        <a class="navbar-brand" href="highScores.php">High Scores</a>
                        <a class="navbar-brand" href="signup.php" style="color:grey">Sign Up</a>
                      </div>
                      <div class="col-lg-3 responsive"></div>
                      <div class="col-lg-5 responsive"></div>';
							}
						?>





        </div>
      </nav>

    </div>
