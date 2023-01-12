<?php
    $connection = mysqli_connect('localhost', 'root', '','world_cup_beta');

    $playerid=$_GET['playerid'];
    $coachID=$_GET['coachID'];
    $query = "delete from player where playerid='$playerid'";

    $data=mysqli_query($connection,$query);

    header("location: displayPlayer.php?coachID=$coachID");
?>