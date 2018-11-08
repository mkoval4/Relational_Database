<!--updateCity.php
The following script rceives a city id and name and updates it
Maksym Koval
-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Update</title>
    <link href="styledatabase.css" rel="stylesheet" type"text/css">
</head>
<body>

<?php
include 'connectdb.php'; //connect to database

  $id= $_POST["teamid"];
  $teamcity = $_POST["teamcity"];

  //sql query to update
  $result = pg_query("UPDATE team SET teamcity = '" . $teamcity . "' WHERE teamid = '" . $id . "';");
  pg_close($connection);

  echo '<table class ="addTeam">';
    echo '<tr class ="addTeam">';
      echo '<td>';
        echo '<h2>Team updated</h2>';
        echo "Redirecting in 3 seconds";
        echo '</td></tr></table>';
        header( "refresh:3;url=index1.php" ); //redirect back to home page
?>
  </body>
  </html>
