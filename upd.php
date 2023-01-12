<!DOCTYPE html>
<html lang="en">
    <?php 
     $teamid=$_GET['teamID'];
     ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Stat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<style>
    body
    {
        background: rgb(155,222,215);
        background: linear-gradient(90deg, rgba(155,222,215,0.7455357142857143) 0%, rgba(70,122,210,0.8015581232492998) 29%, rgba(149,0,255,0.7287289915966386) 100%);
    }
</style>
<body style="margin: 20px;">
    <div class="full">
        <a class="logo" href="home.html"><img src="images/logo.png" alt="#" /></a>
    </div>
    <h1 align="center" style="font-weight: bolder; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">UPDATE STATS</h1>

    <div class="container">
    <form action="upda.php" method="post">
        <div class="form-group" align="center">
    <table class="table table-bordered table-hover " style=" border: 2px solid rgb(32, 12, 27);
    margin: 20px;" >
        <thead>
          <tr>
            <th class="col-md-1" style=" border: 1px solid rgb(32, 12, 27);
            margin: 20px; width: 1%;">PlayerID</th>
            <th class="col-md-2" style=" border: 2px solid rgb(32, 12, 27);
            margin: 50px;">Player Name</th>
            <th class="col-md-2" style=" border: 2px solid rgb(32, 12, 27);
            margin: 50px;">Runs</th>
            <th class="col-md-2" style=" border: 2px solid rgb(32, 12, 27);
            margin: 50px;">Fours </th>
            <th class="col-md-2" style=" border: 2px solid rgb(32, 12, 27);
            margin: 50px;">Sixes</th>
            <th class="col-md-2" style=" border: 2px solid rgb(32, 12, 27);
            margin: 50px;">Wickets</th>
          </tr>
        </thead>
        <tbody>
           
            <tr>
            <td><input type="text" id="pi1" name="pi1" value="<?php
           
            $matchID=$_GET['matchID'];
             $connection = mysqli_connect('localhost', 'root', '','world_cup_beta');
             $playerquery = "SELECT playerid FROM player WHERE teamid=$teamid LIMIT 1";
             $result= mysqli_query($connection,$playerquery);
             while ($row = $result->fetch_assoc()) {
                 echo $row['playerid'];
             }
            ?>"  readonly></td>
            <td><?php
            
            
                $connection = mysqli_connect('localhost', 'root', '','world_cup_beta');
                $query0="UPDATE matches SET updateStatus='NY' where ((updateStatus LIKE 'NN') and (teamB=$teamid) and (matchID=$matchID))";
                $query1="UPDATE matches SET updateStatus='YY' where (updateStatus LIKE 'YN' and teamB=$teamid and matchID=$matchID)";
                $query2="UPDATE matches SET updateStatus='YN' where (updateStatus LIKE 'NN' and teamA=$teamid and matchID=$matchID)";
                $query3="UPDATE matches SET updateStatus='YY' where (updateStatus LIKE 'NY') and (teamA=$teamid) and (matchID=$matchID)";
                $res=mysqli_query($connection,$query0);
                $connection->query($query1);
                $connection->query($query2);
                $connection->query($query3);
    
                $playerquery = "SELECT firstName,lastName FROM player WHERE teamid=$teamid LIMIT 1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['firstName']." ";
                    echo $row['lastName']."<br>";
                }
                
            ?></td>
            
            <td><input type="text" value=0  name="runs1" id="runs1"></td>
            <td><input type="text" value=0  name="fours1" id="fours1"></td>
            <td><input type="text" value=0 name="sixes1" id="sixes1"></td>
            <td><input type="text" value=0  name="wick1" id="wick1"></td>"
          </tr>
          <tr>
          <td><input type="text" id="pi2" name="pi2" value="<?php
                $connection = mysqli_connect('localhost', 'root', '','world_cup_beta');
                $playerquery = "SELECT playerid FROM player WHERE teamid=$teamid LIMIT 1,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['playerid'];
                }
                
            ?>"  readonly></td>
            <td><?php
                $connection = mysqli_connect('localhost', 'root', '','world_cup_beta');

                $playerquery = "SELECT  firstName,lastName FROM player WHERE teamid=$teamid LIMIT 1,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['firstName']." ";
echo $row['lastName']."<br>";
                }
                
            ?></td>
            <td><input type="text" value=0  name="runs2" id="runs2"></td>
            <td><input type="text" value=0  name="fours2" id="fours2"></td>
            <td><input type="text" value=0 name="sixes2" id="sixes2"></td>
            <td><input type="text" value=0  name="wick2" id="wick2"></td>
          
          </tr>
          <tr>
          <td><input type="text"  id="pi3" name="pi3" value="<?php
                $connection = mysqli_connect('localhost', 'root', '','world_cup_beta');
                $playerquery = "SELECT playerid FROM player WHERE teamid=$teamid LIMIT 2,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['playerid'];
                }
                
            ?>"  readonly></td>
            <td><?php
                $connection = mysqli_connect('localhost', 'root', '','world_cup_beta');

                $playerquery = "SELECT firstName,lastName FROM player WHERE teamid=$teamid LIMIT 2,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['firstName']." ";
echo $row['lastName']."<br>";
                }
                
            ?></td>
            <td><input type="text" value=0  name="runs3" id="runs3"></td>
            <td><input type="text" value=0  name="fours3" id="fours3"></td>
            <td><input type="text" value=0 name="sixes3" id="sixes3"></td>
            <td><input type="text" value=0  name="wick3" id="wick3"></td>
          
          </tr>
          <tr>
          <td><input type="text"  id="pi4" name="pi4" value="<?php
                $playerquery = "SELECT playerid FROM player WHERE teamid=$teamid LIMIT 3,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['playerid'];
                }
                
            ?>"  readonly></td>
            <td><?php

                $playerquery = "SELECT  firstName,lastName FROM player WHERE teamid=$teamid LIMIT 3,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['firstName']." ";
echo $row['lastName']."<br>";
                }
                
            ?></td>
            <td><input type="text" value=0  name="runs4" id="runs4"></td>
            <td><input type="text" value=0  name="fours4" id="fours4"></td>
            <td><input type="text" value=0 name="sixes4" id="sixes4"></td>
            <td><input type="text" value=0  name="wick4" id="wick4"></td>
          
          </tr>
          <tr>
          <td><input type="text" id="pi5" name="pi5" value="<?php
                $playerquery = "SELECT playerid FROM player WHERE teamid=$teamid LIMIT 4,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['playerid'];
                }
                
            ?>"  readonly></td>
            <td><?php

                $playerquery = "SELECT  firstName,lastName FROM player WHERE teamid=$teamid LIMIT 4,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['firstName']." ";
echo $row['lastName']."<br>";
                }
                
            ?></td>
            <td><input type="text" value=0  name="runs5" id="runs5"></td>
            <td><input type="text" value=0  name="fours5" id="fours5"></td>
            <td><input type="text" value=0 name="sixes5" id="sixes5"></td>
            <td><input type="text" value=0  name="wick5" id="wick5"></td>
          
          </tr>
          
          <tr>
          <td><input type="text" id="pi6" name="pi6" value="<?php
                $playerquery = "SELECT playerid FROM player WHERE teamid=$teamid LIMIT 5,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['playerid'];
                }
                
            ?>"  readonly></td>    
            <td><?php

                $playerquery = "SELECT  firstName,lastName FROM player WHERE teamid=$teamid LIMIT 5,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['firstName']." ";
echo $row['lastName']."<br>";
                }
                
            ?></td>
            <td><input type="text" value=0  name="runs6" id="runs6"></td>
            <td><input type="text" value=0  name="fours6" id="fours6"></td>
            <td><input type="text" value=0 name="sixes6" id="sixes6"></td>
            <td><input type="text" value=0  name="wick6" id="wick6"></td>
          
          </tr>
          
          <tr>
          <td><input type="text" id="pi7" name="pi7" value="<?php
                $playerquery = "SELECT playerid FROM player WHERE teamid=$teamid LIMIT 6,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['playerid'];
                }
                
            ?>"  readonly></td>    
            <td><?php

                $playerquery = "SELECT  firstName,lastName FROM player WHERE teamid=$teamid LIMIT 6,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['firstName']." ";
echo $row['lastName']."<br>";
                }
                
            ?></td>
            <td><input type="text" value=0  name="runs7" id="runs7"></td>
            <td><input type="text" value=0  name="fours7" id="fours7"></td>
            <td><input type="text" value=0 name="sixes7" id="sixes7"></td>
            <td><input type="text" value=0  name="wick7" id="wick7"></td>
          
          </tr>
          
          <tr>
          <td><input type="text" id="pi8" name="pi8" value="<?php
                $playerquery = "SELECT playerid FROM player WHERE teamid=$teamid LIMIT 7,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['playerid'];
                }
                
            ?>"  readonly></td>    
            <td><?php

                $playerquery = "SELECT  firstName,lastName FROM player WHERE teamid=$teamid LIMIT 7,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['firstName']." ";
echo $row['lastName']."<br>";
                }
                
            ?></td>
            <td><input type="text" value=0  name="runs8" id="runs8"></td>
            <td><input type="text" value=0  name="fours8" id="fours8"></td>
            <td><input type="text" value=0 name="sixes8" id="sixes8"></td>
            <td><input type="text" value=0  name="wick8" id="wick8"></td>
          
          </tr>
          
          <tr>
          <td><input type="text" id="pi9" name="pi9" value="<?php
                $playerquery = "SELECT playerid FROM player WHERE teamid=$teamid LIMIT 8,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['playerid'];
                }
                
            ?>"  readonly></td>    
            <td><?php

                $playerquery = "SELECT  firstName,lastName FROM player WHERE teamid=$teamid LIMIT 8,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['firstName']." ";
echo $row['lastName']."<br>";
                }
                
            ?></td>
            <td><input type="text" value=0  name="runs9" id="runs9"></td>
            <td><input type="text" value=0  name="fours9" id="fours9"></td>
            <td><input type="text" value=0 name="sixes9" id="sixes9"></td>
            <td><input type="text" value=0  name="wick9" id="wick9"></td>
          
          </tr>
          
          <tr>
          <td><input type="text" id="pi10" name="pi10" value="<?php
                $playerquery = "SELECT playerid FROM player WHERE teamid=$teamid LIMIT 9,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['playerid'];
                }
                
            ?>"  readonly></td>    
            <td><?php

                $playerquery = "SELECT  firstName,lastName FROM player WHERE teamid=$teamid LIMIT 9,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['firstName']." ";
echo $row['lastName']."<br>";
                }
                
            ?></td>
            <td><input type="text" value=0  name="runs10" id="runs10"></td>
            <td><input type="text" value=0  name="fours10" id="fours10"></td>
            <td><input type="text" value=0 name="sixes10" id="sixes10"></td>
            <td><input type="text" value=0  name="wick10" id="wick10"></td>
          
          </tr>
          
          <tr>
          <td><input type="text" id="pi11" name="pi11" value="<?php
                $playerquery = "SELECT playerid FROM player WHERE teamid=$teamid LIMIT 10,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['playerid'];
                }
                
            ?>"  readonly></td>    
            <td><?php

                $playerquery = "SELECT  firstName,lastName FROM player WHERE teamid=$teamid LIMIT 10,1";
                $result= mysqli_query($connection,$playerquery);
                while ($row = $result->fetch_assoc()) {
                    echo $row['firstName']." ";
echo $row['lastName']."<br>";
                }
                
            ?></td>
            <td><input type="text" value=0  name="runs11" id="runs11"></td>
            <td><input type="text" value=0  name="fours11" id="fours11"></td>
            <td><input type="text" value=0 name="sixes11" id="sixes11"></td>
            <td><input type="text" value=0  name="wick11" id="wick11"></td>
          
          </tr>
          
        </tbody>
      </table>
      <input type="submit" class="btn btn-primary">
        </div>
    </form>
    </div>
</body>
</html>    