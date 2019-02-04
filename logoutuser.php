<?php
/*
File Name    : logoutuser.php
File Path    : C:\xampp\htdocs\phpCRUD
Description  : PHP page which destroys session and logs user out
Created date : 04/02/2019
Author       : Mukesh
*/


SESSION_START();

$_SESSION = array();
session_destroy();
?>
<?php
require 'index.html';
?>