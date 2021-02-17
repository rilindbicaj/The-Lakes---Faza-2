<?php

//From Stackoverflow
//Start session only if it hasnt been started before
//Needed to be included because a session is already started in header.php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class Login {

    private $connection;
    
    public function __construct() {

        $this->connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes", "vesa", "polo123456789");
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    //Unused function

    public function getConnection() {

        return $this->connection;

    }

    ////////////////////////////////////////////////////////////////////////////////
    //$array -> associative array i marrur si rezultat i ekzekutimit te nje query//
    //////////////////////////////////////////////////////////////////////////////

    public function createUser($array) {

        $user = new User($array);

        $this->setSession($user);
        setCookie($user->getUsername(), $_COOKIE['Username'], 2*40*60*60); //

    }

    public function setSession($user) {

        $_SESSION['Username'] = $user->getUsername();
        $_SESSION['Password'] = $user->getPassword();
        $_SESSION['Email'] = $user->getEmail();
        $_SESSION['ID'] = $user->getID();
        $_SESSION['role'] = $user->getRole(); 
        $_SESSION['theme'] = $user->getTheme();
        $_SESSION['logged'] = 1;

    }

    public function queryUser() {

        $SQLStatement = "SELECT * FROM Users WHERE (username = '{$_POST['UsernameField']}' OR email = '{$_POST['UsernameField']}') AND userpassword = '{$_POST['PasswordField']}'";
        return $this->connection->query($SQLStatement)->fetch(PDO::FETCH_ASSOC);

    }

    public function log_in() {

        $user = $this->queryUser();

        $this->createUser($user); //Create user, set session, set cookie
        header('location: ../index.php'); //Go back to homepage

    }

    //Unused function

    public static function verifyEmptyData() {

        return (empty($_POST['UsernameField']) || empty($_POST['PasswordField']));

    }

}

?>