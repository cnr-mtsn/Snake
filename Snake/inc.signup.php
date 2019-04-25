<?php

	if (isset($_POST['signup'])) {

      include_once 'db.php';

      $username = mysqli_real_escape_string($conn, $_POST['createUsername']);
      $id = mysqli_real_escape_string($conn, $_POST['createId']);
      $password = mysqli_real_escape_string($conn, $_POST['createPassword']);


      /****** ERROR HANDLERS ******/

      //CHECK IF USERNAME IS TAKEN
      $sql = "SELECT * FROM player WHERE name = '$username'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if($resultCheck > 0) {
        header("Location: ./signup.php?signup=usernameTaken");
        exit();
      } else {
        //HASHING PASSWORD
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO player (id, name, password) VALUES ('$id', '$username', '$hashedPwd')";

        mysqli_query($conn, $sql);
        header("Location: ./home.php?signup=SUCCESS");
        exit();
      }

  } else {
      header("Location: ./signup.php?signup=noSubmit");
      exit();
  }

 ?>
