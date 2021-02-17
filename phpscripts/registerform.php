<?php 

    session_start();

    require 'LoginRegister/Register.php';

    $register = new Register();

    $register->registerUser();

?>