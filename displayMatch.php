<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matches</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<style>
    body
    {
        background: rgb(155,222,215);
        background: linear-gradient(90deg, rgba(155,222,215,0.7455357142857143) 0%, rgba(70,122,210,0.8015581232492998) 29%, rgba(149,0,255,0.7287289915966386) 100%);
    }
</style>
<body>
    <div class="full">
        <a class="logo" href="home.html"><img src="images/logo.png" alt="#" /></a>
    </div>
    <h1 style="margin:20px;">Matches </h1>
<table class="table table-bordered table-hover " style=" border: 3px solid rgb(32, 12, 27); margin: 20px;">
        <thead>
            <th>Match ID</th>
            <th>Umpire ID</th>
            <th>Venue</th>
            <th>Team 1</th>
            <th>Team 2</th>
            <th>Winner</th>
            <th>Date</th>
            <th>Update Status</th>

        </thead>
        <tbody>
        <?php
        
          $connection = mysqli_connect('localhost', 'root', '','world_cup_beta');
       
      $query = "SELECT * FROM matches,teams WHERE matches.teamA=teams.teamID order by matchDate" ; //You don't need a ; like you do in SQL
      
      

              $result = mysqli_query($connection,$query);
              
              
              while($row = $result->fetch_assoc()) {                 
                  $matchID=$row["matchID"];
                  $query2= "SELECT teamName FROM matches,teams WHERE (matchID=$matchID AND matches.teamB=teams.teamID)";
                  $result2 = mysqli_query($connection,$query2);
                  $row2=$result2->fetch_assoc();  
                  $query3= "SELECT teamName FROM matches,teams WHERE (matchID=$matchID AND matches.winnerID=teams.teamID)";
                  $result3 = mysqli_query($connection,$query3);
                  $row3=$result3->fetch_assoc();
    
                  echo"<tr>
                      <td>" . $row["matchID"] . "</td>
                      <td>" . $row["umpireID"] . "</td>
                      <td>" . $row["venue"] . "</td>
                      <td>" . $row["teamName"] . "</td>
                      <td>". $row2["teamName"]."</td>
                      <td>" . $row3["teamName"] . "</td>
                      <td>" . $row["matchDate"] . "</td>
                   	 <td>".$row["updateStatus"]."</td>
                  
                     
                      
                  </tr>
                  "; 
              }?>
                </tbody>              
            </table>
            <?php
             echo "\t.   <a class='btn btn-primary btn-xl' href='adminRedirect.html'>Return to Menu</a>";
             echo "\t.   <a class='btn btn-primary btn-xl' href='loginPage.html'>Log Out</a>";
              
            ?>   
            </body>
            </html>
