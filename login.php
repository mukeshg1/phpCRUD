<?php
    session_start();
    $loginemail = false;
    $loginpassword = false;
    include 'constants.php';
    $dbconn = mysqli_connect(SERVER, USER, PASSWORD, DB) or
    exit("Database Error! Try after sometime.");

    $loginemail = mysqli_real_escape_string($dbconn, $_POST['loginemail']);
    $loginpassword = mysqli_real_escape_string($dbconn, $_POST['loginpassword']);
   

    $sql = "select * from user where email = '$loginemail' ";
    if(!$dbconn)
    {
        echo "<p style='color:white;'>Error connecting to database...</p>";
    }
    $result = mysqli_query($dbconn,$sql);
    $rows = mysqli_fetch_array($result);
    if($rows)
    {
        $pass = $rows['password1'];
        if (password_verify($loginpassword, $pass ))
        {
            $_SESSION['user'] = $loginemail;
            header('Location: userprofile.php');
            exit;
        }
        else
        {
            require 'index.html';
            echo "<p style='color:white;'>Error: Email or Password is invalid.</p>";
        }
    }
    else
    {
        require 'index.html';
        echo "<p style='color:white;'>Error: Email or Password is invalid.</p>";
    }
?>

