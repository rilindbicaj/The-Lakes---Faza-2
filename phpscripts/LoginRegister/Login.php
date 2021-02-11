<?php

class Login {

    private $connection;
    
    public function __construct() {

        $this->connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes", "vesa", "polo123456789");
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    public function getConnection() {

        return $this->connection;

    }

    public function createUser($array) { //array assoc qe osht useri nga databaza 

        $user = new User($array);

        $this->setSession($user);
        setCookie($user->getUsername(), $_COOKIE['Username'], 2*40*60*60); //

    }

    public function setSession($user) {

        $_SESSION['Username'] = $user->getUsername();
        $_SESSION['Email'] = $user->getEmail();
        $_SESSION['ID'] = $user->getID();
        $_SESSION['role'] = $user->getRole(); 
        $_SESSION['theme'] = $user->getTheme();
        $_SESSION['logged'] = 1;

    }

    public function queryUser($array) { //Execute query from $_POST and see if the user exists 

        $SQLStatement = "SELECT * FROM Users WHERE (username = '".$array['UsernameField']."' OR email = '".$array['UsernameField']."') AND userpassword = '".$array['PasswordField']."'";
        return $this->connection->query($SQLStatement)->fetch(PDO::FETCH_ASSOC);

    }

    public function log_in($array) { //Array is POST

        if(isset($array['UsernameField'])) { 

            if(!self::verifyEmptyData($array)) {

                $user = $this->queryUser($array);

                if($user != null) { //If query suceends

                $this->createUser($user); //Create user, set session, set cookie
                header('location: ../index.php'); //Go back to homepage

                }

                else header('location: ../login.php'); //If query fails or returns null, head back to login page

            }

            else header('location: ../login.php'); //If empty data, return

        }

        else header('location: ../login.php'); //If post isn't set, return

    }

    public static function verifyEmptyData($array) {

        return (empty($array['UsernameField']) || empty($array['PasswordField']));

    }

}

?>