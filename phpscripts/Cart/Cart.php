<?php

//From Stackoverflow
//Start session only if it hasnt been started before
//Needed to be included because a session is already started in header.php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include 'Product.php';

class Cart {

    private $connection;

    public function __construct() {

        $this->connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes", "vesa", "polo123456789");
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    public function productInCart() {

        $array =  $this->connection->query("SELECT * FROM Cart WHERE UserID={$_SESSION['ID']} AND ProductID={$_POST['productID']}")->fetch(PDO::FETCH_ASSOC);

        if(isset($array['UserID'])) return 1;
        else return 0;

    }

    public function add() { //Get usedID from session and productID from AJAX (through POST)

        $this->connection->query("INSERT INTO CART VALUES ({$_SESSION['ID']},{$_POST['productID']})");
        unset($_POST['productID']);

    }

    public function remove() {

        $this->connection->query("DELETE FROM CART WHERE UserID={$_SESSION['ID']} AND ProductID={$_POST['productID']}");
        unset($_POST['productID']);

    }

    public function cartEmpty() {

        if(isset($_SESSION['ID'])) {

            $array = $this->connection->query("SELECT * FROM CART WHERE UserID = ".$_SESSION["ID"])->fetchAll(PDO::FETCH_ASSOC);

            if(isset($array['0']['UserID'])) return false; //Cart not empty because it returned something
            else return true; //If it's set that means there is something in the cart

        }

    }

    public function getCart() {

        if(isset($_SESSION['ID'])) { 

            $array = $this->connection->query("SELECT * FROM CART WHERE UserID = {$_SESSION["ID"]}")->fetchAll(PDO::FETCH_ASSOC); //Returns array of arrays, so you have to loop through them

            foreach($array as $product) {
    
                $prod = new Product($product['ProductID'], "cart");
    
            }
    

        }

    }

}

?>