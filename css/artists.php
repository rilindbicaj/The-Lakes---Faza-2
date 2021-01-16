<?php Header ("Content-type: text/css; charset=utf-8"); ?>

main {

    height: auto;

}

header {

    height: 60px;

}

h1 {

   margin-bottom: 30px;
   font-size: 1.5em;

}

.artistsContainer {

    position: relative;
    background: url(../media/transpaper.png) repeat!important;
    width: 80%;
    left: 5%;
    top: 20px;
    padding: 5%;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 150px; /* Leave some empty space */
    z-index: -1;
    border:solid 3px rgba(179, 179, 179, 0.432);
    border-top: none;
    border-radius: 255px 15px 225px 15px/15px 225px 15px;
  
}

.artist {

    box-sizing: border-box;
    margin: 40px;
    width: 90%;
    height: auto;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    transition: box-shadow 0.1s linear;

}


.artist:hover {
    
    box-shadow: 40px 40px 80px 1px #989494;

}

.artist:active {

    box-shadow: 40px 40px 80px 1px white;

}

.artistImage {

    width: 25%;
    height: auto;
    border-radius: 100%;
    margin: 20px;

}

.artistImage:hover {

    box-shadow: 0px 0px 30px 5px #989494;

}

.separator {

    width: 10%;
    height: 100%;

}

.artist p {

    padding: 15px;
    text-align: justify;
    height: 100%;
    width: 40%;
    font-size: 0.7em;

}

@media only screen and (max-width: 767px) {

    .artistsContainer {

        width: 90%;
        left: 0%;

    }

}