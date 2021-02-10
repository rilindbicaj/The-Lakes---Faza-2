<?php 

    require 'LoginRegister/Register.php';

    $register = new Register();

    $_POST['UsernameField'] = $_POST['username']; //catch parameters from AJAX
    $_POST['EmailField'] = $_POST['email'];

    if($register->userExists($_POST['UsernameField'], $_POST['EmailField']) == 1) echo 'Username or email already taken';

    else echo 'true';

?>