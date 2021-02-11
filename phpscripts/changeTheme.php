<?php 

session_start();

if(isset($_SESSION['Username'])) {

    $connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes", "vesa", "polo123456789");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $connection->query("UPDATE USERS SET theme=".$_POST['theme']." WHERE UserID=".$_SESSION['ID']);

    $_SESSION['theme'] = $_POST['theme']; //Because the theme is generated from the Session variable; otherwise it will stay like the time you logged in

    echo 'done';

}

?>