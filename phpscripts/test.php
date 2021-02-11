<?php 

    
$connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes", "vesa", "polo123456789");
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//while ($user = $connection->query("SELECT * FROM Products")->fetchAll(PDO::FETCH_ASSOC)) {

    $_POST['theme'] = 0;
    $_SESSION['UserID'] = 1;

    echo "UPDATE USERS SET theme= ".$_POST['theme']." WHERE UserID=".$_SESSION['UserID'];


?>