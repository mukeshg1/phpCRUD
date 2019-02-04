<?php

/*
File Name    : delete-user.php
File Path    : C:\xampp\htdocs\phpCRUD
Description  : PHP page which deletes user data from 'activity' table in database 'crudphp'
Created date : 04/02/2019
Author       : Mukesh
*/

require_once 'constants.php';

$db = mysqli_connect(SERVER, USER, PASSWORD, DB);
$id = $_POST['del_id'];
//echo $music_number;
$qry = "DELETE FROM user WHERE id ='$id'";
$result=$db->query($qry);
if(isset($result)) {
   echo "YES";
} else {
   echo "NO";
}
?>