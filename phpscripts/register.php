<?php 

    require 'connect.php';

    session_start();

    if(isset($_POST['UsernameField'])) {

        $username = $_POST['UsernameField'];
        $password = $_POST['PasswordField'];
        $confirmpassword = $_POST['ConfirmPasswordField'];
        $email = $_POST['EmailField'];
    
        $st = "SELECT username, userpassword, email FROM Users WHERE username = '".$username."' AND userpassword = '".$password."'";
        $query = sqlsrv_query($conn, $st);
        $user = sqlsrv_fetch_array($query);
