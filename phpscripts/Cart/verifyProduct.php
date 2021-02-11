<?php

require 'Cart.php';

$cart = new Cart();

echo $cart->productInCart($_POST['productID']);

?>