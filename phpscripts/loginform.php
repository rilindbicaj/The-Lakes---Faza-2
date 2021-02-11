<?php

session_start();

require 'LoginRegister/User.php';
require 'LoginRegister/Login.php';

//After AJAX takes us here, we simply log the user in, setting the session, cookie, etc.

$login = new Login();
$login->log_in($_POST); 

?>