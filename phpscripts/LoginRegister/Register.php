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

    public function registerUser($array) {

        $this->connection->query("INSERT INTO Users VALUES ('".$array['UsernameField']."','".$array['PasswordField']."',0,0,'".$array['EmailField']."')");

        copy('C:/xampp/htdocs/The Lakes - Faza 2/media/placeholder.jpg', 'C:/xampp/htdocs/The Lakes - Faza 2/media/userprofiles/'.$array['UsernameField'].".jpg");

        $this->login->log_in($array);

    }

    public function userExists($username, $email) {

        $array = $this->connection->query("SELECT * FROM Users WHERE Username='".$username."' OR email='".$email."'")->fetch(PDO::FETCH_ASSOC);

        return isset($array['Username']);

    }

}

?>