<?php

$connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes", "vesa", "polo123456789"); //Kirjo nje instance te PDO, si parametra dergohen emri i serverit dhe databazes
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

class Product {

    private $ProductID;
    private $ProductName;
    private $Price;
    private $Path;
    private $Type;

    public function __construct($ID, $location) {

        global $connection;

        $product = $connection->query("SELECT * FROM Products WHERE ProductID=".$ID)->fetch(PDO::FETCH_ASSOC);

        if(isset($product['ProductID'])) {

            $this->ProductID = $product['ProductID'];
            $this->ProductName = $product['ProductName'];
            $this->Price = $product['Price'];
            $this->Path = $product['ImagePath'];
            $this->Type = $product['ProductType'];

            $this->echoProduct($location);

        }

    }

    public function echoProduct($location) { //different echo for store.php and cart.php

        if($location == "store") {

            echo '<div id="'.$this->ProductID.'" class="columnContent">'; echo "\n";
            echo '<img class="bordersall" src="'.$this->Path.'" alt="merchdisplay">'; echo "\n";
            echo '<h2>'.$this->ProductName.'</h2>'; echo "\n";
            echo '<p>'.$this->Price.'</p>'; echo "\n";
            echo '<button onclick="addToCart()">ADD TO CART</button>'; echo "\n";
            echo '</div>'; echo "\n";
            echo "\n";

        }

        else if($location == "cart") {

            echo '<div id="'.$this->ProductID.'" class="columnContentRow product bordersall">'; echo "\n";
            echo '<img class="artistImage" src="'.$this->Path.'" alt="">'; echo "\n";
            echo '<img class="artistSeparator look" src="media/artist separator.png" alt="">'; echo "\n";
            echo '<h2>'.$this->ProductName.' | '.$this->Price.'</h2>'; echo "\n";
            echo '<span class="removeButton bordersall" onclick="removeFromCart();"> X </span>'; echo "\n";
            echo '</div>'; echo "\n";

        }

        
    }

}

?>