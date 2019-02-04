<?php
    session_start();
    $SERVER = '127.0.0.1';
    $USER = 'root';
    $PASSWORD = '';
    $DB = 'crudphp';

    $dbc = mysqli_connect($SERVER, $USER, $PASSWORD, $DB);
    $id = mysqli_real_escape_string($dbc, $_POST['id']);
    $email = mysqli_real_escape_string($dbc, $_POST['email']);
    $activity = mysqli_real_escape_string($dbc, $_POST['activity']);

    if (ISSET($_SESSION['user']))
    {
        $iuser = $_SESSION['user'];
        $activitymsg = "".$activity." for user ".$id." by ".$iuser."";
        try
        {
            $sql = "INSERT INTO activity (email, activity) VALUES ('$email', '$activitymsg')";
            
            if ($dbc->query($sql) === TRUE)
            {
            echo "Activity added.";
            }
            else 
            {
                echo "Failed to add activity";
            }
        }
        
        catch (mysqli_sql_exception $e)
        {
            echo "<p style='color:red;'>Error: Failed.</p>";
        }
    }
    else
    {
        echo "<p style='color:white;'>Error: Invalid Session</p>";
        exit();
    }


?>