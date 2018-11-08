<!--index.php
Home page for hockey database
Maksym Koval
-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Maksym's Hockey Database</title>
    <link href="styledatabase.css" rel="stylesheet" type"text/css">
    <script type ="text/javascript" src="sort.js"></script>
</head>
  <body>
    <!--CONNECT TO DATABASE-->
    <?php include 'connectdb.php'; ?>
    <div align="center">
                <h1 class="header">Welcome</h1>
                <br>
                <hr>

                <!--TEAMS TABLE-->
                <h2 class="header">Teams</h2>
                <p><b> Select </b> which header to sort by clicking on the header </p>
                <table class ="team" id="Teams">
                  <tr>
                    <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->
                    <th onclick="sortTable(0)">Team Name</th>
                    <th onclick="sortTable(1)">City</th>
                    <th>Team ID</th>
                  </tr>
                  <?php include 'getTeam.php'; //calls php script to populate table with teams in database
                  ?>
                </table>
                <br>
                
             <!--ADD TEAM-->
                <table class ="addTeam">
                  <tr class ="addTeam">
                    <td>
                      <h2>ADD TEAM</h2> <!--form sent to php to specify components of team-->
                      <form action="addTeam.php" method="post" >
                        Team Id:<input type="text" name="teamid"> <br>
                        Team Name:<input type="text" name="teamname"> <br>
                        Team City:<input type="text" name="teamcity"> <br>
                        <input type="submit" value="submit" name="Add Team" >
                      </form>
                    </td>

                    <!--Delete team php call-->
                    <td>
                    <h2>DELETE TEAM</h2> <!--form sent to php script specifying which team to delete-->
                    <form action="deleteTeam.php" method="post" >
                      Team Id:<input type="text" name="teamid">
                      <br> <br> <br>
                      <input type="submit" value="submit" name="Add Team">
                    </form>
                  </td>
                    </tr>

                      <!--NEW ROW-->
                      <!--Update team-->
                    <tr class ="addTeam">
                      <td>
                        <h2>UPDATE TEAM</h2> <!--form sent to php script to update specific team-->
                        <form action="updateTeam.php" method="post" >
                          Team Id:<input type="text" name="teamid">
                          <br> <br> <br>
                          <input type="submit" value="submit" name="Add Team">
                        </form>

                      </td>
                      <td>
                        <!--lAST ROW OF TABLE VIEW GAME INFO-->
                        <h2>VIEW GAME</h2>
                        <form action="viewGame.php" method="post" >
                          Game Id:<input type="text" name="gameid">
                          <br> <br> <br>
                          <input type="submit" value="submit" name="View">
                        </form>
                      </td>
                    </tr>
              </table>

              <!--Retrieves a table of all officials-->
            </br> <h2>Officials</h2> </br>
              <table class ="team">
                <tr class ="team">
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Official ID</th>
                    <?php include 'getOfficial.php'; ?>
                </tr>
              </table>

              </br> </br>


  </body>
</html>
