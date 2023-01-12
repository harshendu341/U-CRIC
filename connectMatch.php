<?php
$matchID = $_POST['matchID'];
$umpireID = $_POST['umpireID'];
$venue = $_POST['venue'];
$teamA = $_POST['teamA'];
$teamB = $_POST['teamB'];
$winnerID = $_POST['winnerID'];
$matchDate = $_POST['matchDate'];

//Connection 
$conn = new mysqli('localhost', 'root', '', 'world_cup_beta');
if ($conn->connect_error) {
    die('Connection Failed : ' .$conn->connect_error);
} 
else {
    $stmt = $conn->prepare("insert into matches(matchID,umpireID,venue,teamA,teamB,winnerID,matchDate) values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iisiiis",$matchID,$umpireID,$venue,$teamA,$teamB,$winnerID,$matchDate);
    $stmt->execute();
    $query="UPDATE teams SET noOfWins=noOfWins+1 where teamID=$winnerID";
    $conn->query($query);
    $query="UPDATE teams SET noOfLosses=noOfLosses+1 where teamID=$teamA and $winnerID=$teamB";
    $conn->query($query);
    $query="UPDATE teams SET noOfLosses=noOfLosses+1 where teamID=$teamB and $winnerID=$teamA";
    $conn->query($query);
    echo "New Match Registered Successfully";
    header("location: adminRedirect.html");
    exit;
}
?>