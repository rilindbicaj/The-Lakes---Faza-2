<?php

require 'Cart.php';

$cart = new Cart();

if($cart->productInCart($_POST['productID']) == 1) {

    echo 'true';

}

else {

    $cart->add();
    echo 'false';

}

?>