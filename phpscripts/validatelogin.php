<?php

        require 'LoginRegister/User.php';
        require 'LoginRegister/Login.php';

        $login = new Login();

        $user = $login->queryUser();

        //If the user does not exist - the query fails or returns nothing - tell AJAX 'User does not exist'. It will the put this message in the bottom of the form
        // echo (something) is what http.responseText means - the server response is what you echo

        if ($user == false || $user == null) echo "User does not exist";

        //If we tell AJAX 'true' then AJAX will submit the form forcefully, which takes you to loginform.php
        
        else echo 'true';
    
        
?>