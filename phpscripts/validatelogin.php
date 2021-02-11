<?php

        require 'LoginRegister/User.php';
        require 'LoginRegister/Login.php';

        $login = new Login();
        //Because of AJAX, the form never truly gets submitted on its own - therefore, we have to send the data through the parameters
        //Also, because of the way the Login class works, if the query results in success, it will log you in automatically
        //So we don't really need to have the form submit anything at all - it's a roundabout approach in order to enable this type of validation
        //But the results should be the same

        //Username and Password are parameters you get from AJAX through POST
        //In the AJAX function, we sent 'username' and 'password' as parameters through the POST method
        //Therefore $_POST in those two indexes is where the parameter values are stores
        //The parameter values are the contents of the input boxes - what we wrote in the username and password boxes
        //We put them in 'UsernameField' and 'PasswordField' because that's how the Login class accesses them
        //Specifically queryUser() takes $_POST as a parameter and looks for 'UsernameField' and 'PasswordField' indexes

        $_POST['UsernameField'] = $_POST['username'];
        $_POST['PasswordField'] = $_POST['password'];
        $user = $login->queryUser($_POST);

        //If the user does not exist - the query fails or returns nothing - tell AJAX 'User does not exist'. It will the put this message in the bottom of the form
        // echo (something) is what http.responseText means - the server response is what you echo
        if ($user == false || $user == null) echo "User does not exist";

        //If we tell AJAX 'true' then AJAX will submit the form forcefully, which takes you to loginform.php
        else echo 'true';
    
        
?>