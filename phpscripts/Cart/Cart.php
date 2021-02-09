<?php

session_start();

class Cart {

    private $connection;

    public function __construct() {

        $this->connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes");
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    public function getConnection() {

        return $this->connection;

    }

    public function productInCart($productID) {

        $query =  $this->connection->prepare("SELECT * FROM Cart WHERE UserID = ? AND ProductID = ?");
        $query->bindParams();
        $array = $query->execute(array($_SESSION['ID'], $productID))->fetchAll(PDO::FETCH_ASSOC);

        if(isset($array['UserID'])) echo 'true';
        else echo 'false';

    }

}

$cart = new Cart();
echo $_SESSION['ID'];
$d = 1;
$cart->productInCart($d);

?>