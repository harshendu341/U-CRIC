<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Player Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style type="text/css">
        table{
            border-color: black;
            border-width: 10px;
            width: 100%;
            color: orange;
            font-family: monospace;
            font-size: 25px;
            text-align: center;
        }

        th{
            background-color: blue;
            color: pink;
        }
    </style>
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
    <div class="container">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Coach's Page(New Player Entry)</h1>
                </div>
                <div class="panel-body">
                    <form action="connectPerson.php" method="post">
                        <div class="form-group">
                            <label for="playerid">PlayerID</label>
                            <input type="text" class="form-control" name="playerid" id="playerid">
                        </div>
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" name="firstName" id="firstName">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" name="lastName" id="lastName">
                        </div>
                        <div class="form-group">
                            <label for="numOfMatches">Number of Matches Played</label>
                            <input type="number" class="form-control" name="numOfMatches" id="numOfMatches">
                        </div>
                        <div class="form-group">
                            <label for="playerRole">Player Role</label>
                            <div>
                                <label for="batsman" class="radio-inline">
                                    <input type="radio" name="playerRole" value="bat" id="others">Batsman
                                </label>
                                <label for="bowler" class="radio-inline">
                                    <input type="radio" name="playerRole" value="bowl" id="others">Bowler
                                </label>
                                <label for="allRounder" class="radio-inline">
                                    <input type="radio" name="playerRole" value="all" id="others">All-Rounder
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="teamID">Team ID</label>
                            <input type="text" class="form-control" name="teamID" id="teamID">
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" id="dob">
                        </div>
                        <div class="form-group">
                            <label for="totalRuns">Total Runs</label>
                            <input type="text" class="form-control" name="totalRuns" id="totalRuns">
                        </div>
                        <div class="form-group">
                            <label for="numOfSixes">Number of Sixes</label>
                            <input type="text" class="form-control" name="numOfSixes" id="numOfSixes">
                        </div>
                        <div class="form-group">
                            <label for="numOfFours">Number of Fours</label>
                            <input type="text" class="form-control" name="numOfFours" id="numOfFours">
                        </div>
                        <div class="form-group">
                            <label for="totalWickets">Total Wickets Taken</label>
                            <input type="text" class="form-control" name="totalWickets" id="totalWickets">
                        </div>
                        <div class="form-group">
                            <label for="bowlerType">Type of Bowler</label>
                            <div>
                                <label for="fast" class="radio-inline">
                                    <input type="radio" name="bowlerType" value="fast" id="others">Fast
                                </label>
                                <label for="chinaman" class="radio-inline">
                                    <input type="radio" name="bowlerType" value="chinaman" id="others">Chinaman
                                </label>
                                <label for="offSpin" class="radio-inline">
                                    <input type="radio" name="bowlerType" value="offSpin" id="others">Off Spinner
                                </label>
                                <label for="legSpin" class="radio-inline">
                                    <input type="radio" name="bowlerType" value="legSpin" id="others">Leg Spinner
                                </label>
                            </div>
                        </div>
                        <div>
                        <?php
                            $connection = mysqli_connect('localhost', 'root', '','world_cup_beta'); //The Blank string is the password
                            
                            $query = "SELECT * FROM player"; //You don't need a ; like you do in SQL
                            $result = mysqli_query($connection,$query);
                            
                            echo "<table>"; // start a table tag in the HTML
                            
                            while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                            echo "<tr><td>" . htmlspecialchars($row['firstName']) . "</td><td>" . htmlspecialchars($row['lastName']) . "</td></tr>";  //$row['index'] the index here is a field name
                            }
                            
                            echo "</table>"; //Close the table in HTML
                            
                            mysqli_close($connection); //Make sure to close out the database connection
                        ?>
                        </div>
                        <input type="submit" class="btn btn-primary">
                        <p align="right">
                            <input type="button" value="Log Out" onclick="window.location.href='loginPage.html'"/>
                        </p>
                    </form>
                </div>
                <div class="panel-footer text-right">
                    <small>&copy; 77and89</small>
                </div>
            </div>
        </div>

    </div>
</body>
</html>