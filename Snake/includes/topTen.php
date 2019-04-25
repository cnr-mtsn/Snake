<?php
  include_once 'db.php';
  if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT player.name, game.difficulty, game.score, game.time
          FROM player JOIN game ON player.id = game.p_id
          ORDER BY score DESC LIMIT 10";
  $result = $conn->query($sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>".strtoupper($row['name'])."</td><td>".strtoupper($row['difficulty'])."</td><td>".$row['score']."</td></tr>";
    }
  } else {
    echo "<tr><td>0 results</td></tr>";
  }
  exit();
 ?>
