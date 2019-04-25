<?php include_once 'signupHeader.php'; ?>

<div class="container header" style="margin-top:5%;">
  <h1 class="display-1 hidden-sm-down">Sign Up</h1>
</div>

<br><br><br><br>

<div class="container row">
  <div class="col-lg-2"></div>
    <div class="col-lg-4">
      <form class="was-validated" action="inc.signup.php" method="POST">
        <fieldset class="form-group">
          <label style="color: white; font-size:25px;"for="createUsername">Create Username</label>
          <input style="opacity:0.6;"type="text" class="form-control" name="createUsername" placeholder="Username" required>
        </fieldset>
        <fieldset class="form-group">
          <label style="color: white; font-size: 25px;"for="createUsername">Create ID  <small style="color: white; font-size: 16px;">5-digits [0-9]</small> </label>
          <input style="opacity:0.6;" type="text" class="form-control" name="createId" placeholder="Create ID" pattern="[0-9]{5}"required>
        </fieldset>
        <fieldset class="form-group">
          <label style="color: white; font-size: 25px;"for="createPassword">Create Password</label>
          <input style="opacity:0.6;" type="password" class="form-control" name="createPassword" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        </fieldset>
        <button style="opacity:0.6; background-color:purple; color:white;" type="submit" name="signup" class="btn">Sign Up</button>
      </form>
    </div>
  <div class="col-lg-6"></div>
</div>

<?php include_once 'footer.php'; ?>
