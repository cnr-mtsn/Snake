<?php
  include_once 'db.php';
  if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT player.name, game.difficulty, game.score, game.time
          FROM player JOIN game ON player.id = game.p_id
          WHERE game.difficulty = 'hard'
          ORDER BY score DESC;";
  $result = $conn->query($sql);
  if (mysqli_num_rows($result) > 0) {
    $count = 1;
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
                <td>". $count++ ."</td>
                <td>". strtoupper($row['name']) ."</td>
                <td>". strtoupper($row['difficulty']) ."</td>
                <td>". $row['score'] ."</td>
                <td>". $row['time'] ."</td>
            </tr>";
    }
  } else {
    echo "<tr><td>0 results</td></tr>";
  }
  exit();
 ?>
