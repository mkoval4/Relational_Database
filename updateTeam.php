<!--updateTeam.php
The following script updates team based if it exists
Maksym Koval
-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Update Team</title>
    <link href="styledatabase.css" rel="stylesheet" type"text/css">
    <script type ="text/javascript" src="sort.js"></script>
</head>
<body>

<?php
include 'connectdb.php'; //CONNECT TO DATABASE

  $id= $_POST["teamid"];

  $result = pg_query("SELECT teamid, teamcity FROM team WHERE teamid = '" . $id . "';");
  $row = pg_fetch_row($result);

  if (pg_num_rows($result) == 0){ //CHECK IF TEAM EXISTS
    echo "The team you are trying to update does not exist \n Redirecting in 2 seconds";
    pg_close($connection);
    header( "refresh:3;url=index1.php" );

  }else{ //TEAM EXISTS
     echo '<table class ="addTeam">';
       echo '<tr class ="addTeam">';
         echo '<td>';
           echo '<h2>UPDATE TEAM</h2>';
           echo "Current Team City: ";
           echo $row[1];

           //BUILD FORM FOR UPDATING THE CITY
           echo '<form action="updateCity.php" method="post" >';
              echo 'New City :<input type="text" name="teamcity">'; //new city
               echo '<input type="hidden" name="teamid"  value="'; echo $row[0]; echo '">'; //send the team id to be updated
             echo '</br> </br> </br>';
             echo '<input type="submit" value="submit" name="Add Team">';
           echo '</form>';
           echo '</td>';
           echo '</tr>';
           echo '</table>';

           //CLOSE CONNECTION
           pg_close($connection);
  }
?>

</body>
</html>
