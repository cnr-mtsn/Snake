<!-- name = username
password = password
button = login-submit  -->

<?php

session_start();

  if (isset($_POST['login-submit'])) {

    include_once 'db.php';

    $user = mysqli_real_escape_string($conn,$_POST['username']);
    $pass = mysqli_real_escape_string($conn,$_POST['password']);

    /**** ERROR HANDLERS ****/
    if (empty($user) || empty($pass)) {
      header("Location: ./home.php?login=empty");
      exit();
    }
    else {
      //CHECK IF USER EXISTS IN DB
      $sql = "SELECT * FROM player WHERE name = '$user'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck < 1) {
        header("Location: ./home.php?login=noUser");
        exit();
      }
      else {
        if ($row = mysqli_fetch_assoc($result)) {
          //DE-HASH PASSWORD
          $hashedPwdCheck = password_verify($pass, $row['password']);
          if ($hashedPwdCheck == false) {
            header("Location: ./home.php?login=incorrectPassword");
            exit();
          }
          elseif ($hashedPwdCheck == true) {
            //LOGIN USER
            $_SESSION['username'] = $row['name'];
            $_SESSION['uid'] = $row['id'];
            header("Location: ./home.php?login=SUCCESS");
            exit();
          }
        }
      }
    }
  }
  else {
    header("Location: ./home.php?login=noSubmit");
    exit();
  }




 ?>
