<?php
$pi1 = $_POST['pi1'];
$pi4 = $_POST['pi4'];
$pi3 = $_POST['pi3'];
$pi2 = $_POST['pi2'];
$pi5 = $_POST['pi5'];
$pi6 = $_POST['pi6'];
$pi7 = $_POST['pi7'];
$pi8 = $_POST['pi8'];
$pi9 = $_POST['pi9'];
$pi10 = $_POST['pi10'];
$pi11 = $_POST['pi11'];
$teamID=$_GET['teamID'];

$runs1=$_POST['runs1'];
$runs2=$_POST['runs2'];
$runs3=$_POST['runs3'];
$runs4=$_POST['runs4'];
$runs5=$_POST['runs5'];
$runs6=$_POST['runs6'];
$runs7=$_POST['runs7'];
$runs8=$_POST['runs8'];
$runs9=$_POST['runs9'];
$runs10=$_POST['runs10'];
$runs11=$_POST['runs11'];

$fours1=$_POST['fours1'];
$fours2=$_POST['fours2'];
$fours3=$_POST['fours3'];
$fours4=$_POST['fours4'];
$fours5=$_POST['fours5'];
$fours6=$_POST['fours6'];
$fours7=$_POST['fours7'];
$fours8=$_POST['fours8'];
$fours9=$_POST['fours9'];
$fours10=$_POST['fours10'];
$fours11=$_POST['fours11'];

$sixes1=$_POST['sixes1'];
$sixes2=$_POST['sixes2'];
$sixes3=$_POST['sixes3'];
$sixes4=$_POST['sixes4'];
$sixes5=$_POST['sixes5'];
$sixes6=$_POST['sixes6'];
$sixes7=$_POST['sixes7'];
$sixes8=$_POST['sixes8'];
$sixes9=$_POST['sixes9'];
$sixes10=$_POST['sixes10'];
$sixes11=$_POST['sixes11'];

$wick1=$_POST['wick1'];
$wick2=$_POST['wick2'];
$wick3=$_POST['wick3'];
$wick4=$_POST['wick4'];
$wick5=$_POST['wick5'];
$wick6=$_POST['wick6'];
$wick7=$_POST['wick7'];
$wick8=$_POST['wick8'];
$wick9=$_POST['wick9'];
$wick10=$_POST['wick10'];
$wick11=$_POST['wick11'];


$conn = new mysqli('localhost', 'root', '', 'world_cup_beta');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
$sql = "UPDATE player SET numOfMatches=numOfMatches+1,totalRuns=totalRuns+$runs1,numOfFours=numOfFours+$fours1,numOfSixes=numOfSixes+$sixes1,totalWickets=totalWickets+$wick1 WHERE playerid=$pi1";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }


$sql = "UPDATE player SET numOfMatches=numOfMatches+1,totalRuns=totalRuns+$runs2,numOfFours=numOfFours+$fours2,numOfSixes=numOfSixes+$sixes2,totalWickets=totalWickets+$wick2 WHERE playerid=$pi2";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
}


$sql = "UPDATE player SET numOfMatches=numOfMatches+1,totalRuns=totalRuns+$runs3,numOfFours=numOfFours+$fours3,numOfSixes=numOfSixes+$sixes3,totalWickets=totalWickets+$wick3 WHERE playerid=$pi3";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

$sql = "UPDATE player SET numOfMatches=numOfMatches+1,totalRuns=totalRuns+$runs4,numOfFours=numOfFours+$fours4,numOfSixes=numOfSixes+$sixes4,totalWickets=totalWickets+$wick4 WHERE playerid=$pi4";
      if ($conn->query($sql) === TRUE) {
          echo "Record updated successfully";
        } else {
          echo "Error updating record: " . $conn->error;
        }  
$sql = "UPDATE player SET numOfMatches=numOfMatches+1,totalRuns=totalRuns+$runs5,numOfFours=numOfFours+$fours5,numOfSixes=numOfSixes+$sixes5,totalWickets=totalWickets+$wick5 WHERE playerid=$pi5";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $conn->error;
          }  
$sql = "UPDATE player SET numOfMatches=numOfMatches+1,totalRuns=totalRuns+$runs6,numOfFours=numOfFours+$fours6,numOfSixes=numOfSixes+$sixes6,totalWickets=totalWickets+$wick6 WHERE playerid=$pi6";
          if ($conn->query($sql) === TRUE) {
              echo "Record updated successfully";
            } else {
              echo "Error updating record: " . $conn->error;
            }  
            $sql = "UPDATE player SET numOfMatches=numOfMatches+1,totalRuns=totalRuns+$runs7,numOfFours=numOfFours+$fours7,numOfSixes=numOfSixes+$sixes7,totalWickets=totalWickets+$wick7 WHERE playerid=$pi7";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
              } else {
                echo "Error updating record: " . $conn->error;
              }  
              $sql = "UPDATE player SET numOfMatches=numOfMatches+1,totalRuns=totalRuns+$runs8,numOfFours=numOfFours+$fours8,numOfSixes=numOfSixes+$sixes8,totalWickets=totalWickets+$wick8 WHERE playerid=$pi8";
              if ($conn->query($sql) === TRUE) {
                  echo "Record updated successfully";
                } else {
                  echo "Error updating record: " . $conn->error;
                }  
                $sql = "UPDATE player SET numOfMatches=numOfMatches+1,totalRuns=totalRuns+$runs9,numOfFours=numOfFours+$fours9,numOfSixes=numOfSixes+$sixes9,totalWickets=totalWickets+$wick9 WHERE playerid=$pi9";
                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                  } else {
                    echo "Error updating record: " . $conn->error;
                  }  
                  $sql = "UPDATE player SET numOfMatches=numOfMatches+1,totalRuns=totalRuns+$runs10,numOfFours=numOfFours+$fours10,numOfSixes=numOfSixes+$sixes10,totalWickets=totalWickets+$wick10 WHERE playerid=$pi10";
                  if ($conn->query($sql) === TRUE) {
                      echo "Record updated successfully";
                    } else {
                      echo "Error updating record: " . $conn->error;
                    }  
                    $sql = "UPDATE player SET numOfMatches=numOfMatches+1,totalRuns=totalRuns+$runs11,numOfFours=numOfFours+$fours11,numOfSixes=numOfSixes+$sixes11,totalWickets=totalWickets+$wick11 WHERE playerid=$pi11";
                    if ($conn->query($sql) === TRUE) {
                        echo "Record updated successfully";
                      } else {
                        echo "Error updating record: " . $conn->error;
                      }  
 $sql="SELECT teamID from player where playerid=$pi1";
 $res=mysqli_query($conn,$sql);

            while ($row = $res->fetch_assoc()) {
                $teamID=$row['teamID'];
            } 
$sql="SELECT username from userdetail where teamID=$teamID LIMIT 1";
$res=mysqli_query($conn,$sql);
while ($row = $res->fetch_assoc()) {
  $coachname=$row['username'];
} 
                     header("location: coachRedirect.php?coachname=$coachname");
  $conn->close();
?>