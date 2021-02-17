<?php 

    require 'LoginRegister/Register.php';

    $register = new Register();

    if($register->userExists() == 1) echo 'Username or email already taken';

    else echo 'true';

?>