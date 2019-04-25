<?php include_once 'highScoresHeader.php'; ?>

    <div class="row">
      <div class="col-md-1-12">
        <h1 class="header display-1" style="margin-top:5%;">Top Medium Scores</h1>
      </div>
    </div>

    <div class="row" style="margin-top:5%;">
      <div class="col-md-5">
        <div class="row">
          <div class="col-md-4">
            <button type="button" class="btn btn-success"style="min-width:100px; width:100%; font-size: 20px;"><a style="color:white;"href="easyScores.php">Easy</a></button>
          </div>
          <div class="col-md-4">
            <button type="button" class="btn btn-warning"style="min-width: 100px; width:100%; font-size: 20px;"><a style="color:white;"href="mediumScores.php">Medium</a></button>
          </div>
          <div class="col-md-4">
            <button type="button" class="btn btn-danger"style="min-width: 100px; width:100%; font-size: 20px;"><a style="color:white;" href="hardScores.php">Hard</a></button>
          </div>
        </div>
      </div>
    </div>

      <div class="col-md" style=" margin-top:2%;">
        <table class="table" style="color:white; border:none; background-color: black; opacity: 0.7;">
          <thead style="border:1px solid white;">
            <tr>
              <th style="background-color: grey; color: black; opacity: .9; font-size: 22px; font-weight: bolder;">Rank</th>
              <th style="background-color: grey; color: black; opacity: .9; font-size: 22px; font-weight: bolder;">Name</th>
              <th style="background-color: grey; color: black; opacity: .9; font-size: 22px; font-weight: bolder;">Difficulty</th>
              <th style="background-color: grey; color: black; opacity: .9; font-size: 22px; font-weight: bolder;">Score</th>
              <th style="background-color: grey; color: black; opacity: .9; font-size: 22px; font-weight: bolder;">Time</th>
            </tr>
          </thead>
          <tbody style="border:1px solid white;">
            <tr>
              <?php include 'includes/topMediumScores.php'; ?>
            </tr>
          </tbody>
        </table>
      </div>

</div>

<?php include_once 'footer.php'; ?>
