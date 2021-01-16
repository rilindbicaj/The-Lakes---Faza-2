<?php 

require '../phpscripts/connect.php';
session_start();

//Dynamic stylesheet used for light and dark themes
//Uses data from database initially then gets them from the session so it's easier to access

Header ("Content-type: text/css; charset=utf-8");

//THEME

//Dynamically generate CSS code based on query values; function used to generate CSS takes in the theme from the Session 
//First get values from database or session

$theme = "dark";

if(isset($_SESSION['UserID'])) { 
    
    $arr = array($_SESSION['UserID']);
    $sql = "SELECT theme from Users where UserID=?";
    $query = sqlsrv_query($conn, $sql);
    $sqlarray = sqlsrv_fetch_array($query, $arr);
    $theme = $sqlarray['theme'];

}

echo $theme;

function theme($theme, $selector) {

    if($theme === "dark") { //By default $_SESSION is not set, therefore go with dark

        switch($selector) {

            case "background":

               echo 'background-image: url(../media/transpaper.png);'.'<br>';
               break;

            case "color":

                echo 'color: #989494;'.'<br>';
                break;

            case "icons":
                break;

        }

    }

    else if ($theme === "light") {

        switch($selector) {

            case "background":

               echo 'background-image: url(../media/transpaperLightMode.png);'.'<br>';
               break;

            case "color":

                echo 'color: #202020;'.'<br>';
                break;

            case "icons":

                echo 'filter: invert(1);'.'<br>';
                echo 'filter: brightness(0.2);'.'<br>';
                
        }

    }

}

?>