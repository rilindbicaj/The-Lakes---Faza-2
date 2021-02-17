<?php 

session_start();

require "ConnectionsMisc.php";

$conn = new ConnectionsMisc();

$conn->changeTheme();

?>