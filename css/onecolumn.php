<?php

session_start();

Header ("Content-type: text/css; charset=utf-8");

require '../phpscripts/functions.php';

?>

/* GENERAL */

main {

    height: auto;

}

.mainContainer {

    position: relative;
    box-sizing: border-box;
    width: 80%;
    left: 10%;
    top: 20px;
    height: auto;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
    margin-bottom: 150px;
    flex-wrap: wrap;
    z-index: -1;

}

.column {

    left: 0;
    width: 80%;
    height: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 5%;
    margin-bottom: 5%;

}

.rowFlex {

    left: 0;
    width: 90%;
    height: auto;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    margin-top: 5%;
    margin-bottom: 5%;

}

.columnContent {

    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    height: auto;
    margin-bottom: 10px;
    padding: 15px;
    transition: box-shadow 0.1s linear;
    transition: filter 0.2s linear;

}

.columnContentRow {

    display: flex;
    flex-direction: row;
    margin: 40px;
    width: 100%;
    height: auto;
    justify-content: space-between;
    align-items: center;
    transition: box-shadow 0.1s linear;
    transition: filter 0.2s linear;
    margin-bottom: 10px;
    padding: 15px;

}

.mainContainer h1 {

    text-align: center;
    font-size: 1.4em;
    font-weight: 700;
    margin-bottom: 30px;

}

.columnContent h3 {

    text-align: center;
    width: 100%;
    font-size: 0.8em;

}

.columnContent h2 {

    text-align: center;
    font-size: 1.2em;

}

.columnContent img {

   width: 100%;
   height: auto;
   margin: 20px;
   transition: transform 0.2s linear;

}

.columnContent img:hover {

    transform: scale(1.1);

}

.columnContent:hover {

    <?php theme($theme, 'dropshadow')?>

}

.columnContent:active {

    filter: drop-shadow(10px 10px 3px rgba(179, 179, 179, 0.8));

}

.columnContent p {

    font-size: 0.6em;
    text-align: justify;
    font-weight: 600;

}

.separator {

    width: 30%;
    height: auto;
    margin: 30px;
    <?php theme($theme, 'icons')?>

}

iframe {

    width: 100%;
    margin: 30px;

}

/***************/
/* Artist page */
/***************/

.artistImage {

    width: 20%;
    height: auto;
    border-radius: 100%;
    margin: 20px;
    border: none;
    transition: transform 0.2s linear;

}

.artistSeparator {

    width: 10%;
    height: auto;

}

.artistText {

    padding: 15px;
    text-align: justify;
    height: 100%;
    width: 50%;
    font-size: 0.7em;


}

.columnContentRow img:first-child:hover {

    transform: scale(1.1);

}

.columnContentRow:hover {

    <?php theme($theme, 'dropshadow')?>

}

.columnContentRow:active {

    filter: drop-shadow(10px 10px 3px rgba(179, 179, 179, 0.8));

}

@media only screen and (min-width: 768px) and (max-width: 991px) {

    .column {

        width: 90%;
        left: 0;

    }

}

@media (max-width: 767px) {

    .mainContainer {

        width: 100%;
        height: auto;
        left: 0;
        padding: 5%;

    }

    .column {

        flex-basis: 100%;
        width: 90%;

    }

    .columnContent p {

        font-size: 0.8em;
        width: 100%;

    }

    .mainContainer .column h1 {

        font-size: 2em;

    }

    .columnContent h3 {

        font-size: 1.2em;
        font-weight: 700;
        width: 100%;

    }

    .columnContent h2 {

        font-size: 0.9em;
        font-weight: 700;
        width: 100%;

    }

    /*ARTIST PAGE*/

    .columnContentRow {

        flex-direction: column;
        width: 100%;

    }

    .artistText {

        font-size: 0.9em;
        width: 100%;

    }
    
    .artistImage {

        width: 50%;
        height: auto;

    }

    .artistSeparator {

        width: 25%;
        height: auto;
        margin: 20px;

    }

    iframe { 

        width: 100%;
        height: auto;

    }

}