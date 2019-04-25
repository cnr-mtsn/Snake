<?php include_once 'homeHeader.php'; ?>


<div class="row" style="margin-top: 5%;">
  <div class="col-md-12">
    <h1 class="header display-1 hidden-sm-down">Welcome to Snake.py</h1>
  </div>
</div>


  <!-- VIDEO PREVIEW / PLAY NOW -->
  <div class="row container-fluid" style="background-color: none; margin-top:5%;">

    <!-- VIDEO PREVIEW COLUMN -->
    <!-- AFTER GAME IS FINISHED, REPLACE YOUTUBE VIDEO WITH ACTUAL GAMEPLAY SNIPPET -->
    <div class="col-lg-6">
        <h6 class="display-4" style=" text-align:center; font-weight: 400; color:white; background-color: black; opacity: 0.4; font-size:40px; border:none;">Gameplay Preview</h6>
        <div class="row" style="background-color:white;">
          <div class="col-md-12 embed-responsive embed-responsive-16by9" style="background-color:none;">
              <iframe name="gamePreview" src="https://www.youtube.com/embed/XINAniQCh8Y?autoplay=1&loop=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
          </div>
        </div>
    </div> <!--END VIDEO PREVIEW-->
    <div class="col-lg-1">

    </div>
    <div class="col-lg-3">
      <div class="row" style="margin-top:5%;">
        <div class="col-md-12">
          <h6 class="display-4" style="text-align:center; font-weight: 400; color:white; background-color: black; opacity: 0.5; font-size:40px; border:none;">Play Now</h6>
        </div>
      </div>
      <div class="row" style="background-color:none;">
        <div class="row">
          <div class="col-md-12">
            <button type="button" class="btn btn-success" style="min-width:100%; width:100%; margin-bottom:1%; opacity: .7;"><a href="easy.php" style="color:white;">Easy</a></button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button type="button" class="btn btn-warning" style="min-width:100%; width:100%; margin-bottom:1%; opacity: .7;"><a href="medium.php" style="color:white;">Medium</button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button type="button" class="btn btn-danger" style="min-width:100%; width:100%; margin-bottom:1%; opacity: .7;"><a href="hard.php" style="color:white;">Hard</button>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- TOP 10 SCORES ROW -->
    <div class="row" style="margin-top:5%;">
      <div class="col-lg-6">
        <table class="table" style="color:white; border:none; background-color: black; opacity: 0.7;">
          <thead>
            <h6 class="display-4" style="text-align:center; font-weight: 400; color:white; font-size:40px; border:none; background-color: black; opacity: 0.4; margin-bottom:1%;">Top 10</h6>
            <tr>
              <th style="background-color: grey; color: black; opacity: .9; font-size: 22px; font-weight: bolder;">Name</th>
              <th style="background-color: grey; color: black; opacity: .9; font-size: 22px; font-weight: bolder;">Difficulty</th>
              <th style="background-color: grey; color: black; opacity: .9; font-size: 22px; font-weight: bolder;">Score</th>
            </tr>
          </thead>
          <tbody>
            <tr style="background-color: black; opacity: .5;">
              <?php
                include_once 'includes/topTen.php';
               ?>
           </tr>
          </tbody>
        </table>
      </div>
      <!-- END TOP 10 SCORES -->
    </div>


  </div>
  <!-- END VIDEO PREVIEW / TOP SCORES ROW -->

<!-- END MAIN CONTAINER -->


<?php include_once 'footer.php'; ?>
