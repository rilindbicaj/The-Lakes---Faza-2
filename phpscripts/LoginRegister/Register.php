<?php 

require 'User.php';
require 'Login.php';

class Register {

    private $connection;
    private $login;

    public function __construct() {

        $this->connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes", "vesa", "polo123456789");
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->login = new Login();

    }

    public function registerUser() {

        $this->connection->query("INSERT INTO Users VALUES ('{$_POST['UsernameField']}','{$_POST['PasswordField']}',0,0,'{$_POST['EmailField']}')");

        copy("../media/userprofiles/placeholder.jpg", "../media/userprofiles/{$_POST['UsernameField']}.jpg");

        $this->login->log_in();

    }

    public function userExists() {

        $array = $this->connection->query("SELECT * FROM Users WHERE Username='{$_POST['UsernameField']}' OR email='{$_POST['EmailField']}'")->fetch(PDO::FETCH_ASSOC);

        return isset($array['Username']); //Returns 1 if true apparently, not "true"
    }

}

?>