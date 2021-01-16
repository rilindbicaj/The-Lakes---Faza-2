<?php
        require 'connect.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        $st = "SELECT * FROM Users WHERE (username = '".$username."' OR email = '".$username."') AND userpassword = '".$password."'";
        $query = sqlsrv_query($conn, $st);
        $user = sqlsrv_fetch_array($query);

        if ($user == false || $user == null) {
            
            echo "User does not exist";
        
        }

        else echo "true";
    
        
?>