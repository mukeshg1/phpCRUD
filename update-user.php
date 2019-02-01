<?php
require_once 'constants.php';

$db = mysqli_connect(SERVER, USER, PASSWORD, DB);
$id = $_POST['id'];
$updatefirstname = mysqli_real_escape_string($db, $_POST['updatefirstname']);
$updatelastname = mysqli_real_escape_string($db, $_POST['updatelastname']);
$updateemail = mysqli_real_escape_string($db, $_POST['updateemail']);

//echo $music_number;
$qry = "UPDATE user SET firstname='$updatefirstname', lastname='$updatelastname', email='$updateemail' WHERE id = '$id'";
$result=$db->query($qry);
if(isset($result)) {
   echo "Changes saved successfully";
} else {
   echo "Couldn't save changes, Please try again.";
}
?>