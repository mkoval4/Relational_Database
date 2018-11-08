<!--viewGame.php
The following script shows game info
Maksym Koval
Assignment 3
-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>View Game</title>
    <link href="styledatabase.css" rel="stylesheet" type"text/css">
    <script type ="text/javascript" src="sort.js"></script>
</head>
<body>
  <?php
    include 'connectdb.php';
    $id= $_POST["gameid"];
    $result = pg_query("SELECT gameid FROM game WHERE gameid = '" . $id . "';");

    //check if game exists
    if (pg_num_rows($result) == 0){ //GAME DOES NOT EXIST
      echo '<table class ="addTeam">';
        echo '<tr class ="addTeam">';
          echo '<td>';
            echo '<h2>Your game does not exist</h2>';
            echo "Redirecting in 3 seconds";
            echo '</td></tr></table>';
            header( "refresh:3;url=index1.php" );
      pg_close($connection);
      header( "refresh:3;url=index1.php" );

    }else{ //GAME EXISTS
      echo '<h2 class="header">Game</h2>';

      //BUILD TABLE
      echo '<table class ="team" id="Game">';
        echo '<tr>';
        //HEADERS
          echo '<th>Team 1 Name</th>';
          echo '<th>Team 1 City</th>';
          echo '<th>Team 1 Score</th>';

          echo '<th>Team 2 Score </th>';
          echo '<th>Team 2 Name</th>';
          echo '<th>Team 2 City</th>';

          echo '<th>Game City</th>';
          echo '<th>Game Date</th>';

          echo '<th> Officials </th>';
        echo '</tr>';
        echo '</table>';
        pg_close($connection); //close connection
        echo '<button onclick="reloadPage()">Home</button>';

      }
    ?>




</body>
</html>
