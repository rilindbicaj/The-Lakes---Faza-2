<?php

        require 'LoginRegister/User.php';
        require 'LoginRegister/Login.php';

        $login = new Login();
        //Because of AJAX, the form never truly gets submitted on its own - therefore, we have to send the data through the parameters
        //Also, because of the way the Login class works, if the query results in success, it will log you in automatically
        //So we don't really need to have the form submit anything at all - it's a roundabout approach in order to enable this type of validation
        //But the results should be the same

        //Username and Password are parameters you get from AJAX through POST
        $_POST['UsernameField'] = $_POST['username'];
        $_POST['PasswordField'] = $_POST['password'];
        $user = $login->queryUser($_POST);

        if ($user == false || $user == null) {
            
            echo "User does not exist";
        
        }

        else { 
            
            echo 'true';

        }
    
        
?>