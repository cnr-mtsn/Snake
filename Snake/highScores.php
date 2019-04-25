<?php include_once 'highScoresHeader.php'; ?>

    <div class="row">
      <div class="col-md-12">
        <h1 class="header display-1 hidden-sm-down" style="margin-top:5%;">All High Scores</h1>
      </div>
    </div>

    <div class="row" style="margin-top:5%;">
      <form>
        <div class="col-md-2">
            <button type="button" class="btn btn-success" style="min-width: 100%; width:100%;"><a style="color:white;"href="easyScores.php">Easy</a></button>
        </div>
        <div class="col-md-2">
            <button type="button" class="btn btn-warning" style="min-width: 100%; width:100%;"><a style="color:white;"href="mediumScores.php">Medium</a></button>
        </div>
        <div class="col-md-2">
            <button type="button" class="btn btn-danger" style="min-width: 100%; width:100%;"><a style="color:white;" href="hardScores.php">Hard</a></button>
            </form>
        </div>
    </div>

    <div class="row">
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
              <?php include 'includes/topScores.php'; ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>


</div> //END MAIN CONTAINER

<?php include_once 'footer.php'; ?>
