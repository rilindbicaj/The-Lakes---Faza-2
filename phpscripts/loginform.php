<?php

session_start();
require 'LoginRegister/User.php';
require 'LoginRegister/Login.php';

$login = new Login();
$login->log_in($_POST); 

?>