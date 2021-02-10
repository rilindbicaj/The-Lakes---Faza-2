<?php

session_start();

class Cart {

    private $connection;

    public function __construct() {

        $this->connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes", "vesa", "polo123456789");
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    public function productInCart($productID) {

        $array =  $this->connection->query("SELECT * FROM Cart WHERE UserID='".$_SESSION['UserID']."' AND ProductID ='".$productID."'");

        if(isset($array['UserID'])) echo 'true';
        else echo 'false';

    }

}

?>