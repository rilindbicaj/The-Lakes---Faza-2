<?php

session_start();

//THEME

//Dynamically generate CSS code based on query values; function used to generate CSS takes in the theme from the Session 
//First get values from database or session

$theme = 0; //by default dark mode

if(isset($_SESSION['theme'])) { 
    
    $theme = $_SESSION['theme'];

}

function theme($theme, $selector) {

    if($theme == 0) { //Dark

        switch($selector) {

            case "background":

               echo 'background-image: url(../media/transpaper.png);'.'<br>';
               break;

            case "color":

                echo 'color: #989494;'.'<br>';
                break;

            case "icons":
                break;

            case "borders":
                echo 'border:solid 5px #989494;';
                break;

            case "footer":
                echo 'background-color: rgba(32, 32, 32, 0.6);';
                break;

            case "dropshadow":
                echo 'filter: drop-shadow(10px 10px 3px rgba(179, 179, 179, 0.432));';
                break;

            case "boxshadow":
                echo 'box-shadow: 40px 40px 80px 1px #989494;';
                break;


        }

    }

    else if ($theme == 1) { //Light theme

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

            case "borders":
                echo 'border:solid 5px #202020;';
                break;
            
            case "footer":
                echo 'background-color: rgba(152, 148, 148, 0.6);';
                break;

            case "dropshadow";
                echo 'filter: drop-shadow(10px 10px 3px rgba(32, 32, 32, 0.6));';
                break;

            case "boxshadow":
                echo 'box-shadow: 40px 40px 80px 1px #202020;';
                break;

                
        }

    }

}

?>