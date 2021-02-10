<?php 

    session_start();

    require 'LoginRegister/Register.php';

    $register = new Register();

    $array['UsernameField'] = $_POST['UsernameField'];
    $array['PasswordField'] = $_POST['PasswordField'];
    $array['EmailField'] = $_POST['EmailField'];

    $register->registerUser($array);

?>