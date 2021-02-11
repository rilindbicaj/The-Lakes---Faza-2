<?php 

    require 'LoginRegister/Register.php';

    $register = new Register();

    //In this case, the method userExists() takes 2 parameters *directly*, so we can also directly send it what AJAX sent us
    //No need to put them in different indexes like in validateLogin.php

    if($register->userExists($_POST['username'], $_POST['email']) == 1) echo 'Username or email already taken';

    else echo 'true';

?>