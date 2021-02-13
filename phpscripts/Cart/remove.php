<?php

session_start();

$connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes", "vesa", "polo123456789");
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$connection->query("DELETE FROM CART WHERE UserID=".$_SESSION['ID']." AND ProductID=".$_POST['productID']);
unset($_POST['productID']);

?>