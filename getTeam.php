<!--getTeam.php
The following script gets teams and populates table with them
Maksym Koval
Assignment3
-->
<?php
$query='SELECT * FROM TEAM';
$result=pg_query($query);
if(!$result){
  die ("Database query failed!");
}
while ($row=pg_fetch_row($result)){
  //Team name
  echo '<tr><td>';
  echo $row[2];
  echo '</td>';

  //Team city
  echo '<td>';
  echo $row[1];
  echo '</td>';

  //Team ID
  echo '<td>';
  echo $row[0];
  echo '</td></tr>';
}

 ?>
