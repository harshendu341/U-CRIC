<?php
$umpireID = $_POST['umpireID'];
$umpireName = $_POST['umpireName'];
$numOfMatches = $_POST['numOfMatches'];
$country = $_POST['country'];

//Connection 
$conn = new mysqli('localhost', 'root', '', 'world_cup_beta');
if ($conn->connect_error) {
    die('Connection Failed : ' .$conn->connect_error);
} 
else {
    $stmt = $conn->prepare("insert into umpire(umpireID,umpireName,numOfMatches,country) values(?, ?, ?, ?)");
    $stmt->bind_param("isis",$umpireID,$umpireName,$numOfMatches,$country);
    $stmt->execute();
    echo "New Umpire Registered Successfully";
    header("location: adminRedirect.html");
    exit;
}
?>