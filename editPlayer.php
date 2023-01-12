<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<style>
    body
    {
        background: rgb(155,222,215);
        background: linear-gradient(90deg, rgba(155,222,215,0.7455357142857143) 0%, rgba(70,122,210,0.8015581232492998) 29%, rgba(149,0,255,0.7287289915966386) 100%);
    }
</style>
<body style="margin: 50px;">
    <div class="full">
        <a class="logo" href="home.html"><img src="images/logo.png" alt="#" /></a>
    </div>
    <h1 align="center">Edit Player Details</h1>
    <br>
    <table class="table table-bordered table-hover " style=" border: 3px solid rgb(32, 12, 27); margin: 20px;">
        <thead>
            <th>Player ID</th>
            <th>first Name</th>
            <th>last Name</th>
            <th>Date of Birth</th>
            <th>Player Role</th>
            <th>Number of matches</th>
            <th>Team ID</th>
            <th>Total Runs</th>
            <th>Number of Sixes</th>
            <th>Number of fours</th>
            <th>Number of Wickets</th>
            <th>bowler Type</th>
            <th>Options</th>
        </thead>
        <tbody>
            <?php
                $id=$_GET['playerid'];
                $connection = mysqli_connect('localhost', 'root', '','world_cup_beta');


                $query = "SELECT * FROM player WHERE playerid='$id'"; //You don't need a ; like you do in SQL
                $result = mysqli_query($connection,$query);

                //$firstName
                //$lastName


                if (!$result) {
                    die("Invalid Query: ".$connection->error);
                }

                while($row = $result->fetch_assoc()) {
                    echo"<tr>
                        <td>" . $row["playerid"] . "</td>
                        <td>" . $row["firstName"] . "</td>
                        <td>" . $row["lastName"] . "</td>
                        <td>" . $row["dob"] . "</td>
                        <td>" . $row["playerRole"] . "</td>
                        <td>" . $row["numOfMatches"] . "</td>
                        <td>" . $row["teamID"] . "</td>
                        <td>" . $row["totalRuns"] . "</td>
                        <td>" . $row["numOfSixes"] . "</td>
                        <td>" . $row["numOfFours"] . "</td>
                        <td>" . $row["totalWickets"] . "</td>
                        <td>" . $row["bowlerType"] . "</td>
                        <td>
                        <a class='btn btn-primary btn-sm' href='deletePlayer.php?playerid=$row[playerid]'>Delete</a>
                        </td>
                    </tr>
                    "; 
                }                
            ?>
            <td>
            <?php
                $id=$_GET['playerid'];
                $connection = mysqli_connect('localhost', 'root', '','world_cup_beta');


                $query = "SELECT * FROM player WHERE playerid='$id'"; //You don't need a ; like you do in SQL
                $result = mysqli_query($connection,$query);

                if (!$result) {
                    die("Invalid Query: ".$connection->error);
                }

                while($row = $result->fetch_assoc()) {
                    echo"<tr>
                        <td>" . $row["playerid"] . "</td>
                        <td>" . $row["firstName"] . "</td>
                        <td>" . $row["lastName"] . "</td>
                        <td>" . $row["dob"] . "</td>
                        <td>" . $row["playerRole"] . "</td>
                        <td>" . $row["numOfMatches"] . "</td>
                        <td>" . $row["teamID"] . "</td>
                        <td>" . $row["totalRuns"] . "</td>
                        <td>" . $row["numOfSixes"] . "</td>
                        <td>" . $row["numOfFours"] . "</td>
                        <td>" . $row["totalWickets"] . "</td>
                        <td>" . $row["bowlerType"] . "</td>
                        <td>
                        <a class='btn btn-primary btn-sm' href='deletePlayer.php?playerid=$row[playerid]'>Delete</a>
                        </td>
                    </tr>
                    "; 
                }                
            ?>
            </td>
        </tbody>
    </table>
    <?php
        echo "<a class='btn btn-primary btn-xl' href='newPlayer.html'>Add New Player</a>";  
        echo "\t<a class='btn btn-primary btn-xl' href='loginPage.html'>Log Out</a>"; 
    ?>
</body>
</html>