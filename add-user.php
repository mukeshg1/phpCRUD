<?php

    /*
    File Name    : add-user.php
    File Path    : C:\xampp\htdocs\phpCRUD
    Description  : PHP page which adds user into 'activity' table in database 'crudphp'
    Created date : 04/02/2019
    Author       : Mukesh
    */

    session_start();
    require_once 'constants.php';

    $db = mysqli_connect(SERVER, USER, PASSWORD, DB);


    $flag = 0;
    // receive all input values from the form
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastame = mysqli_real_escape_string($db, $_POST['lastname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password1 = mysqli_real_escape_string($db, $_POST['password1']);


    foreach($_POST as $key => $value) 
    {
        if (empty($value))
        {
            $flag += 1;
        }
    }
    
    
    if ($flag == 0)
    {
        try
        {
            $password1 = password_hash($password1, PASSWORD_BCRYPT);
            $sql = "INSERT INTO user (firstname, lastname, email, password1) VALUES ('$firstname',
                                      '$lastame', '$email', '$password1')";
            
            if ($db->query($sql) === TRUE)
            {
                $_SESSION['user'] = $email;
            }
            else 
            {
                echo "Registration Unsuccessfull";
            }
        }
        
        catch (mysqli_sql_exception $e)
        {
            echo "<p style='color:red;'>Error: Registration Unsuccessfull</p>";
        }
    }
    else
    {
        echo "Invalid session. Please try again.";
    }
    
  
?>