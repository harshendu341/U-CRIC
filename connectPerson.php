<?php
$playerid = $_POST['playerid'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$dob=$_POST['dob'];
$playerRole = $_POST['playerRole'];
$numOfMatches = $_POST['numOfMatches'];
$teamID = $_POST['teamID'];
$totalRuns = $_POST['totalRuns'];
$numOfSixes = $_POST['numOfSixes'];
$numOfFours = $_POST['numOfFours'];
$totalWickets = $_POST['totalWickets'];
$bowlerType = $_POST['bowlerType'];

//Connection 
$conn = new mysqli('localhost', 'root', '', 'world_cup_beta');
if ($conn->connect_error) {
    die('Connection Failed : ' .$conn->connect_error);
} 
else {
    $stmt = $conn->prepare("insert into player(playerID, firstName, lastName, dob, playerRole, numOfMatches,teamID,totalRuns,numOfSixes,numOfFours,totalWickets,bowlerType) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssiiiiiis",$playerid,$firstName,$lastName,$dob,$playerRole,$numOfMatches,$teamID,$totalRuns,$numOfSixes,$numOfFours,$totalWickets,$bowlerType);
    $stmt->execute();
    echo "New User Registered Successfully";
    $stmt->close();
    $conn->close();
    header("location: newPlayer.html");
}
?>