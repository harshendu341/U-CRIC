<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create/View Match</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
</head>
<style>
    body
    {
        background: rgb(155,222,215);
        background: linear-gradient(90deg, rgba(155,222,215,0.7455357142857143) 0%, rgba(70,122,210,0.8015581232492998) 29%, rgba(149,0,255,0.7287289915966386) 100%);
    }
</style>
<?php 
    $coachname=$_GET['coachname'];
    $connection = mysqli_connect('localhost', 'root', '','world_cup_beta');
            $query="SELECT teamID FROM userdetail WHERE username='$coachname'";
            $res=mysqli_query($connection,$query);
            $teamID=0;
            while ($row = $res->fetch_assoc()) {
                $teamID=$row['teamID'];
            }
           // $r=$res->fetch_assoc();
            
    ?>
<body>
    <div class="full">
        <a class="logo" href="home.html"><img src="images/logo.png" alt="#" /></a>
    </div>
        <h1 style="font-weight: bolder; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin: 50px; ">COACH DASHBOARD</h1>
        <center><?php echo "<a class= 'btn btn-primary btn-xl' href='displayPlayer.php?coachname=$coachname' style='background-color: blueviolet;margin: 20px;'>View Players</a>";?></center>
        <center><?php echo"<a class='btn btn-primary btn-xl' href='matchview.php?teamID=$teamID'  style='background-color: blueviolet; margin: 20px;'>View Matches</a>";?></center>
        <br>
        <br>
        <center><a class='btn btn-primary btn-sm' href='loginPage.html' >Log Out</a></center>
</body>
</html>