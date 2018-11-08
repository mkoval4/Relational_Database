<!--getOfficial.php
The following script populates a table with officials
Maksym Koval
Assignment3
-->
<?php
$query='SELECT * FROM official ORDER BY lastname';
$result=pg_query($query);
if(!$result){
  die ("Database query failed!");
}
while ($row=pg_fetch_row($result)){ //loop through rows

  //Row with offical name
  echo '<tr><td>';
  echo $row[2];
  echo '</td>';

  echo '<td>';
  echo $row[1];
  echo '</td>';

  //Row with offical id
  echo '<td>';
  echo $row[0];
  echo '</td></tr>';
}

 ?>
