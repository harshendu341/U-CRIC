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

        $role = "SELECT userRole FROM userdetail where username = '$username'";
        $roleresult = mysqli_query($db, $role);
        $row = $roleresult->fetch_assoc();

        if ($count == 1) {
            if ($row["userRole"]== 'coach') {
                header("location: coachRedirect.php?coachname=$username");
            }
            else if ($row["userRole"]== 'player') {
                header("location: playerView.php?username=$username");
            }
            else if ($row["userRole"]== 'admin') {
                header("location: adminRedirect.html");
            }
            else if ($row["userRole"]== 'umpire') {
                header("location: umpireView.php");
            }
        }
        else {
            $error = "Your Login Name or Password is invalid";
            header("location: errorPage.html");
        }

        exit;
    }
?>