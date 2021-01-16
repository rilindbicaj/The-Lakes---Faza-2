<?php 

//Dynamic stylesheet used for light and dark themes
//Uses data from database initially then gets them from the session so it's easier to access

Header ("Content-type: text/css; charset=utf-8");

require '../phpscripts/connect.php';
require '../phpscripts/functions.php';

?>

@font-face {

font-family: Didot;
src: url(../media/Didot\ Regular.ttf);

}

@keyframes growingGlowingWhite {

    0% {<?php theme($theme, 'color')?>}
    50% {color: white; font-size: 110%;}
    100% {<?php theme($theme, 'color')?> font-size: 107%;}

}

@keyframes glowingWhite {

    0% {<?php theme($theme, 'color')?>}
    50% {color: white;}
    100% {<?php theme($theme, 'color')?>}

}

@keyframes fade {

    from {opacity: 0;}
    to {opacity: 1;}

}

@keyframes gr {

    0% {box-shadow: 0px 0px 15px 1px rgba(255, 0,0, 0);}
    50% {box-shadow: 0px 0px 15px 1px rgba(255, 0,0, 0.4);}
    100% {box-shadow: 0px 0px 15px 1px rgba(255, 0,0, 0);}

}

@keyframes gg {

    0% {box-shadow: 0px 0px 15px 1px rgba(0, 255, 0,0, 0);}
    50% {box-shadow: 0px 0px 15px 1px rgba(0, 255, 0,0.4);}
    100% {box-shadow: 0px 0px 15px 1px rgba(0, 255, 0, 0);}

}

.glowred {

    animation: gr 2s infinite;

}

.glowgreen {

    animation: gg 2s infinite;

}

* {

    margin: 0;
    padding: 0;
    <?php theme($theme, 'color')?>
    font-family: Didot;
    font-size: 107%;
    font-weight:bolder;
    z-index: 0;

}

.opacityFade {

    opacity: 0;

}

.image {

    background-image: url(../media/backgr.gif);
    position: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: -2;
    height: 100vh;
    width: 100vw;
    <?php theme($theme, 'icons') //invert and make it black?> 

}

.imageGradient {

    position: fixed;
    background-color: #202020;
    z-index: -1;
    opacity: 0.87;
    height: 100vh;
    width: 100vw;
    animation-name: fadeIn;
    animation-duration: 3s;
    animation-iteration-count: 1;

}

body {

    display: flex;
    flex-direction: column;
}

main {

    position: relative;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    left: 5vw;
    top: 5vh;
    width: 90vw;
    height: 80vh;
    z-index: 0;
    animation: fade 3s;

}

#userFormmainContent {

    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: flex-end;
    width: 90vw;
    height: 54vh;  

}

footer {

    <?php theme($theme, 'footer')?>
    position: fixed;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    top: 90vh;
    width: 100vw;
    height: 10vh;
    z-index: 0;
        
}

.paperBackground {

    <?php theme($theme, 'background')?>
    background-repeat: repeat;

}

header {

    background-color: #202020;
    z-index: 0;
    width: 100%;
    height: 50px!important;

}

.headerContent {

    display: flex;
    flex-direction: row;
    justify-content: space-around;
    position: relative;
    top: 10%;

}

.headerContent li {

    list-style: none;

}

.headerContentPhone {

    display: flex;
    flex-direction: row;
    align-items: center;
    max-height: 500px;
    justify-content: space-around;
    position: relative;
    top: 30%;

}

.headerContentPhone li {

    list-style: none;

}

.headerContentPhone li a img {

    height: 3vh;
    width: auto;
    transition: transform 0.2s linear;
    <?php theme($theme, 'icons')?>

}

.headerContentPhone li a img:hover {

    transform: scale(1.5);

}

.loginLogo {

    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: flex-end;
    width: 75%;
    height: 25%;
    margin-bottom: 1%;
    z-index: -1;

}

.loginLogo img {

    height: 100%;
    width: auto;
    animation: fade 9s !important; /* idk whos overriding this but i will find u... actually i wont */

}

.row {

    width: 100%;
    height: 65%;

}

.userForm {

    position: relative;
    left: 80%;
    bottom: 35%;
    display: flex;
    font-size: 100%;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    align-content: space-around;
    width: 20%;
    height: 135%; /* 100% of container is 65% of .main ; we need it to be ~88%*/
    order: 2;
    z-index: 2;
    animation: fade 12s;

}

.usernameCenter {

text-align: center;

}

.mainContent {

    position: relative;
    background-repeat: repeat;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    left: 0%; /* so it doesnt dissapear */
    bottom: 135%; /* so it doesnt dissapear */
    width: 75%;
    height: 100%;
    z-index: 0;
    animation: fade 8s;

}

.slideTitle {

    display: flex;
    flex-direction: row;
    width: 80%;
    height: auto;
    align-items: center;
    justify-content: space-evenly;

}

.slideTitle span {

    font-size: 0.8em;

}

.slideTitle img{

    height: 30px;
    width: auto;

} 

a {

    text-decoration: none;
    

}

header a:hover {

    animation: growingGlowingWhite;
    animation-duration: 1.5s;
    animation-iteration-count: infinite;

}

.loginLogo a:hover {

    animation: glowingWhite;
    animation-duration: 1.5s;
    animation-iteration-count: infinite;
    text-shadow: 1px 1px 15px rgba(255, 255, 255, 0.8);

}

.loginLogo a {

    transition: text-shadow 0.5s ease-in-out;

}

.userForm ul li a:hover {

    animation: glowingWhite;
    animation-duration: 1.5s;
    animation-iteration-count: infinite;

}

footer ul {

    display: flex;
    flex-direction: row;
    justify-content: center;
    list-style: none;
    align-items: center;

}

.loginLogo a {

    font-size: 100%;

}

footer p {

    color: #989494;
    font-size: 100%;

}

.footerIcons {

    height: 4vh;
    width: auto;

}

.userForm ul {

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

}

.userForm ul li {

    list-style: none;

}

.userForm ul li img {

    height: 5vh;
    width: auto;
    transition: transform 0.2s linear;
    <?php theme($theme, 'icons')?>


}

.userForm li a img:hover {

    transform: scale(1.2);

}

.look {

    <?php theme($theme, 'icons')?>

}

#profilePic {

    position: relative;
    width: 30%;
    height: auto;
    left: 35%;
    border: 5px solid #989494;
    border-radius: 10px;
    border-style:outset;
    filter:none;

}

#logoText {

    position: relative;
    z-index: -1;
    animation-name: fadeIn;
    animation-duration: 3s;
    animation-iteration-count: 1;
    <?php if(isset($_SESSION['logged'])) echo 'left:25%;'?>

}

.dotsContent{

    position: absolute;
    right: 0px;
    top: 35px;
    width: 150px;
    padding: 0px 5px 5px 5px;
    z-index: 200;
    height: 0;
    opacity: 0;

}

.bordersall {

    <?php theme($theme, 'borders') ?>
    border-radius: 255px 15px 225px 15px/15px 225px 15px;

}

.bordersnobottom {

    <?php theme($theme, 'borders') ?>
    border-bottom: none;
    border-radius: 255px 15px 225px 15px/15px 225px 15px;

}

.bordersnotop {

    <?php theme($theme, 'borders') ?>
    border-top: none;
    border-radius: 255px 15px 225px 15px/15px 225px 15px;

}

.dotsContent.show  {

    height: auto;
    opacity: 1;

}

.dotsContent ul {

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

}

.dotsContent ul li a {

    animation-name: glowingWhite;
    

}

#slideshow {

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: relative;
    width: 50%;
    height: 80%;   

}

#slideshow>p {

    font-size: 0.8em;
    margin: 10px;

}


#slideshowImage {

    height: 60%;
    width: auto;
    display: relative;
    box-shadow: 1px 1px 30px 3px rgba(199, 199, 199, 0.3);
    transition: opacity 0.5s ease;
    margin-top: 10px;

}

#slideshowText {

    font-size: 90%;
    position: relative;
    bottom: 5%;
    transition: opacity 0.5s ease;
    text-align: center;

}

#slideDotsContainer {

    margin: 1% 0% 1% 0%;
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    width: 35%;
    height: 10%;

}

.slideDots {

    position: relative;
    display: inline-block;
    color: #989494;
    background-color: #989494;
    border-radius: 100%;
    height: 10px;
    width: 10px;
    border: 2px solid #989494;
    margin: 3px;
    transition: background-color 0.2s ease-in-out;
    box-shadow: 1px 1px 30px 3px rgba(199, 199, 199, 0.3);
    
}

.slideDots:hover {

    background-color: rgba(32, 32, 32, 0.6);

}

.slideDots:hover {

    background-color: rgba(32, 32, 32, 0.6);

}

.dotsClicked {

    background-color : rgba(32, 32, 32, 0.6)

}

.notFound {

    width: 60%;
    height: auto;
    margin-top: 20px;

}

@media (min-width: 992px) {

    .headerContentPhone { /* phone style header hidden for large screens */

        display: none;

    }

}

@media (min-width: 768px) and (max-width: 991px) {

    * {

        font-size: 105%;

    }

    .loginLogo img { /* Resize logo so login/register text doesn't wrap */

        height: 15vh;
    
    }

    .headerContentPhone { /* keep phone header hidden */

        display: none;

    }

    #slideshow {

        width: 60%;

    }

}

@media (max-width: 767px) {

    

    * { /* decrease font size so its not gigantic */

        font-size: 99%;

    }

    .headerContent { /* replace header*/

        display: none;

    }

    .userForm { /* remove login entirely */

        display: none;

    }

    .loginLogo { /* logo box takes space from login */

        width: 90vw;
        justify-content: center; /* center the logo image */

    }

    #logoText { /* make logo take up entire row*/

        height: 100%;
        max-width: 100%;
        position: relative;
        <?php if(isset($_SESSION['logged'])) echo 'left:0%;'?>

    }

    .loginLogo a {  /* Make log in & register disappear */

        display: none;

    }

    .mainContent { /* take up userForm space that's available now */

        top: 0%;
        width: 90vw;

    }

    #slideshow {

        width: 100%;

    }

    #slideshowImage {

        width: 60%;
        max-height: 55%;
        height: auto;

    }

    #slideshowText {

        width: 90%;

    }

    .slideTitle {

        position: absolute; /* because flex column and space evenly dont work apparently */
        left: 7.5%;
        bottom: 90%;

    }

}