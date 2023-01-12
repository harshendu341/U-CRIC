<?php
$username = $_POST['username'];
$password = $_POST['password'];
$userRole = $_POST['userRole'];
$playerid = $_POST['playerid'];
$teamID = $_POST['teamID'];
$umpireID = $_POST['umpireID'];

//Connection 
$conn = new mysqli('localhost', 'root', '', 'world_cup_beta');
if ($conn->connect_error) {
    die('Connection Failed : ' .$conn->connect_error);
} 
else {
    if(empty($playerid)){
        $playerid = NULL;
    }
    if(empty($teamID)){
        $teamID = NULL;
    }
    if(empty($umpireID)){
        $umpireID = NULL;
    }
    $stmt = $conn->prepare("insert into userdetail(username,password,userRole,playerid,teamID,umpireID) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiii",$username,$password,$userRole,$playerid,$teamID,$umpireID);
    $stmt->execute();
    echo "New User Registered Successfully";
    echo "<script> location.href='loginPage.html'; </script>";
    exit;
}
?>