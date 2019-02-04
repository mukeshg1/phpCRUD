<?php

/*
File Name    : userprofile.php
File Path    :C:\xampp\htdocs\phpCRUD
Description  : PHP page which displays the profile of a logged in user
Created date : 04/02/2019
Author      : Mukesh
*/


session_start();
if (ISSET($_SESSION['user']))
{
    $user = false;
    include 'constants.php';
    $dbconn = mysqli_connect(SERVER, USER, PASSWORD, DB) or
    exit("Database Error! Try after sometime.");
    
    $user = $_SESSION['user'];

    $sql = "select * from user where email = '$user' ";
    if(!$dbconn)
    {
        echo "Error connecting to database..";
    }
    $result = mysqli_query($dbconn,$sql);
    $rows = mysqli_fetch_array($result);
    if($rows)
    {
    //User profile is displayed below.
    ?>
                <html>
                <head>
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
                    <link rel="stylesheet" href="stylephp.css"> 
                </head>
                <body>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a href="userprofile.php" ><img class="logo" src="logo2.png"></a> 
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="userprofile.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="all-user.php">All users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="all-activity.php">Activities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logoutuser.php">Logout</a>
                            </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="card-header">
                        Welcome, <?php echo $rows["firstname"]. " " . $rows["lastname"] ?>!
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">Name</div>
                                    <div class="col-md-6"><?php echo $rows["firstname"]. " " . $rows["lastname"]?></div>
                                </div>  
                                <div class="row">
                                    <div class="col-md-6">Email</div>
                                    <div class="col-md-6"><?php echo $rows["email"]?></div>
                                </div>
                            </div>
                        </div>
                    </div>   

                </body>
                </html>
        <?php
        }
        else
        {
            require 'index.html';
            echo "<p style='color: 'white'>email address or password is invalid.</p>";
        }
    }
    else
    {
        require 'index.html';
        echo "<p style='color: 'white'>Error: Invalid session.</p>";
    }
?>

