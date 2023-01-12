<?php
$coachID = $_POST['coachID'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$numOfMatches = $_POST['numOfMatches'];
$teamID = $_POST['teamID'];
$coachRole = $_POST['coachRole'];

//Connection 
$conn = new mysqli('localhost', 'root', '', 'world_cup_beta');
if ($conn->connect_error) {
    die('Connection Failed : ' .$conn->connect_error);
} 
else {
    $stmt = $conn->prepare("insert into coach(coachID,firstName,lastName,numOfMatches,teamID,coachRole) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issiis",$coachID,$firstName,$lastName,$numOfMatches,$teamID,$coachRole);
    $stmt->execute();
    echo "New User Registered Successfully";
    header("location: newCoach.html");
    exit;
}
?>