<?php
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