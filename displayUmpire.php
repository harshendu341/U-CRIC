<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players</title>
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
    <h1 align="center">List of Umpires</h1>
    <br>
    <table class="table table-bordered table-hover " style=" border: 3px solid rgb(32, 12, 27); margin: 20px;">
        <thead>
            <th>Umpire ID</th>
            <th>Umpire Name</th>
            <th>Matches As Umpire</th>
            <th>Nationality</th>
        </thead>
        <tbody>
            <?php
                $connection = mysqli_connect('localhost', 'root', '','world_cup_beta');

                $query = "SELECT * FROM umpire"; //You don't need a ; like you do in SQL
                $result = mysqli_query($connection,$query);

                if (!$result) {
                    die("Invalid Query: ".$connection->error);
                }

                while($row = $result->fetch_assoc()) {
                    echo"<tr>
                        <td>" . $row["umpireID"] . "</td>
                        <td>" . $row["umpireName"] . "</td>
                        <td>" . $row["numOfMatches"] . "</td>
                        <td>" . $row["country"] . "</td>
                        
                        <td>
                        <a class='btn btn-primary btn-sm' href='deleteUmpire.php?umpireID=$row[umpireID]'>Delete</a>
                       
                        </td>
                    </tr>
                    "; 
                }                
            ?>
        </tbody>
    </table>


    <?php
        echo "<a class='btn btn-primary btn-xl' href='newUmpire.html'>Add New Umpire</a>";  
     
    ?>


            <?php  
             echo "\t.   <a class='btn btn-primary btn-xl' href='adminRedirect.html'>Return to Menu</a>" ;
             echo "\t.   <a class='btn btn-primary btn-xl' href='loginPage.html'>Log Out</a>"; 
                     
            ?>      
</body>
</html>

