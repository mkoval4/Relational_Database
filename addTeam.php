<!--addTeam.php
The following script adds a team based on its existance in the database
Maksym Koval
Assignment 3
-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Add Team</title>
    <link href="styledatabase.css" rel="stylesheet" type"text/css">
    <script type ="text/javascript" src="sort.js"></script>
</head>
<body>

<?php
  include 'connectdb.php';
  $id= $_POST["teamid"];
  $name = $_POST["teamname"];
  $city =$_POST["teamcity"];

  //query used to check if team exists
  $result = pg_query("SELECT teamid FROM team WHERE teamid = '" . $id . "';");

  //check if game exists
  if (pg_num_rows($result) == 0){

    //INSERT TEAM
    $query = "INSERT INTO team VALUES('" . $id . "','" . $name . "','" . $city . "');";
    if (!pg_query($query)) {
         die("Error: insert failed-->" . pg_last_error($connection));
     }
    echo "Your team was added!\n  Redirecting in 2 seconds.";
    pg_close($connection);
    header( "refresh:2;url=index1.php" ); //REDIRECT BACK TO HOME

  }else{ //THE GAME DOES NOT EXIST
    echo "You cannot add an existing team \n Redirecting in 2 seconds.";
    pg_close($connection);
    header( "refresh:22;url=index1.php" );
  }
?>

</body>
</html>
