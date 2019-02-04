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
        echo "Error connecting to database..";
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
        }
        else
        {
            require 'index.html';
            echo "email address or password is invalid.";
        }
    }
    else
    {
        require 'index.html';
        echo "Invalid username or password";
    }
?>

