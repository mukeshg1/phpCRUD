<?php
SESSION_START();

$_SESSION = array();
session_destroy();
?>
<?php
require 'index.html';
?>