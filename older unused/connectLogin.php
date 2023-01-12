<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Connection
    $db = mysqli_connect('localhost', 'root', '', 'world_cup_beta');
    if ($db->connect_error) {
        die('Connection Failed : ' .$conn->connect_error);
    } 
    else {
        $sql = "SELECT * FROM userdetail WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($db, $sql);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            header("location: newPlayer.html");
        }
        else {
            $error = "Your Login Name or Password is invalid";
            header("location: errorPage.html");
        }

        exit;
    }
?>