<?php 

require '../phpscripts/connect.php';
session_start();

//Dynamic stylesheet used for light and dark themes
//Uses data from database initially then gets them from the session so it's easier to access

Header ("Content-type: text/css; charset=utf-8");

//THEME

//Dynamically generate CSS code based on query values; function used to generate CSS takes in the theme from the Session 
//First get values from database or session

$arr = sqlsrv_query($conn, "SELECT * FROM USERS WHERE USERNAME='rilindbicaj'");
echo sqlsrv_fetch_array($arr)['Username'];

while($row = sqlsrv_fetch_array($arr, SQLSRV_FETCH_ASSOC)) {

    echo $row;

}

?>