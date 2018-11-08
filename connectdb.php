<!--connectdb.php
The following script is used to connect to the database
Maksym Koval
Assignemnt3
-->

<?php
$dbhost = "dbserver";
$dbuser= "mkoval4";
$dbpass = "dF+Brpx";
$dbname = "mkoval4assign2db";
$connection = pg_connect("host=$dbhost dbname=$dbname user=$dbuser password=$dbpass");

if (!$connection) {
     echo "Database Connection Failed" ;
   }
?>
