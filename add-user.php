<?php

    require_once 'constants.php';

    $db = mysqli_connect(SERVER, USER, PASSWORD, DB);


    $flag = 0;
    // receive all input values from the form
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($db, $_POST['middlename']);
    $lastame = mysqli_real_escape_string($db, $_POST['lastname']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password1 = mysqli_real_escape_string($db, $_POST['password1']);


    foreach($_POST as $key => $value) 
    {
            if (empty($value))
            {
                $flag += 1;
            }
    }
    if (empty($middlename))
    {
        $flag = 0;
    }
    
    
    if ($flag == 0)
    {
        $password1 = password_hash($password1, PASSWORD_BCRYPT);
        $sql = "INSERT INTO user (firstname, middlename, lastname,phone, email, password1) VALUES ('$firstname',
            '$middlename', '$lastame', '$phone', '$email', '$password1')";
        if ($db->query($sql) === TRUE){
            echo "<p> Registration successfull</p>";
        }
        else 
        {
            echo "<p style='color:red;'>Error: Registration Unsuccessfull</p>";
        }
    }
    else
    {
        echo "Invalid session. Please try again.";
    }
    
  
?>