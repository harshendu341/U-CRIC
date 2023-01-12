<?php
    $connection = mysqli_connect('localhost', 'root', '','world_cup_beta');

    $umpireID=$_GET['umpireID'];

    $query = "delete from umpire where umpireID='$umpireID'";

    $data=mysqli_query($connection,$query);

    header("location: displayUmpire.php");
?>