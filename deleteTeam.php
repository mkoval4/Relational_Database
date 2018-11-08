<!--deleteTeam.php
The following script deletes a team based on it existance
Maksym Koval
Assignment3
-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Delete Team</title>
    <link href="styledatabase.css" rel="stylesheet" type"text/css">
    <script type ="text/javascript" src="sort.js"></script>
</head>
<body>

<?php
include 'connectdb.php'; //CONNECT TO DATABASE

  $id= $_POST["teamid"];

  //QUERY USED TO TO FIND OUT IF TEAM EXISTS
  $result = pg_query("SELECT teamid FROM team WHERE teamid = '" . $id . "';");

  //check if game exists
  if (pg_num_rows($result) == 0){
    echo "The team you are trying to delete does not exist \n Redirecting in 2 seconds";
    pg_close($connection);
    header( "refresh:2;url=index1.php" );

  }else{ //THE TEAM EXISTS MOVE FORWARD WITH DELETE
    $query = "DELETE FROM team WHERE(teamid = '" . $id ."');";
    if (!pg_query($query)) {
         die("Error: insert failed-->" . pg_last_error($connection));
     }
    echo "Your team was deleted!";
    pg_close($connection);
    header( "refresh:2;url=index1.php" );
  }


?>

</body>
</html>
