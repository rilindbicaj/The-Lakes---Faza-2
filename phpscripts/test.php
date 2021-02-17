<?php

$_POST['UsernameField'] = "bici";
$_POST['PasswordField'] = "pass";
$_POST['EmailField'] = "hej@gmail.com";
$_SESSION["ID"] = 3;
$_POST['productID'] = 4;

echo "SELECT * FROM Cart WHERE UserID = {$_SESSION['ID']} AND ProductID = {$_POST['productID']}";

?>