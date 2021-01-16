<?php 

    require 'connect.php';

    session_start();

    if(isset($_POST['UsernameField'])) {

        $username = $_POST['UsernameField'];
        $password = $_POST['PasswordField'];
    
        $st = "SELECT UserID, username, isModerator, theme FROM Users WHERE username = '".$username."' AND userpassword = '".$password."'";
        $query = sqlsrv_query($conn, $st);
        $user = sqlsrv_fetch_array($query);

        if($user) {

            $_SESSION['UserID'] = $user['UserID'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['isModerator'] = $user['isModerator'];
            $_SESSION['theme'] = $user['theme'];
            $_SESSION['logged'] = 1;

            header("location: ../index.php");

               }

        else {
            
                header("location: ../login.php");

         }

        }


?>