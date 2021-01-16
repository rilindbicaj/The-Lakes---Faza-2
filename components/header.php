<?php require 'phpscripts/connect.php';

session_start();    

if(isset($_SESSION['logged'])) {

    //  echo "user is logged";

}

else {

    echo "user is not logged";
    
}

?>

<div class="image">

</div>

<div class="imageGradient">

</div>

<main>

    <header class='bordersnobottom paperBackground'>

        <ul class="headerContent">

            <li><a href="index.php">the lakes</a></li>
            <li><a href="aboutus.php">about us</a></li>
            <li><a href="artists.php">artists</a></li>
            <li><a href="videos.php">videos</a></li>
            <li><a href="news.php">news</a></li>
            <li><a href="store.php">store</a></li>
            <li><a href="releases.php">latest releases</a></li>

            
            <?php //echo log in or log out based on session
                 if(!isset($_SESSION['logged'])) echo "<li><a href='login.php'>log in</a></li>";   
                 else echo "<li><a href='phpscripts/logout.php'>log out</a></li>"; 
             ?>

        </ul>

        <ul class="headerContentPhone">

            <li><a href="cart.php"><img src="media/CartLogo.png" alt="Cart"></a></li>

            <li><a href="bookmarks.php"><img src="media/BookmarkLogo.png" alt="Bookmark"></a></li>

            <li><a href="yourartists.php"><img src="media/ArtistIcon.png" alt="Artist"></a></li>

            <li><a href="settings.php"><img src="media/SettingsLogo.png" alt="Settings"></a></li>

            <li>

                <a href="#"><img src="media/dots.png" id="dots" alt="Menu" onclick="menuShow(show)"></a>

                <div class="dotsContent">

                    <ul>

                        <li><a href="index.php">the lakes</a></li>
                        <li><a href="aboutus.php">about us</a></li>
                        <li><a href="artists.php">artists</a></li>
                        <li><a href="videos.php">videos</a></li>
                        <li><a href="news.php">news</a></li>
                        <li><a href="store.php">store</a></li>
                        <li><a href="releases.php">latest releases</a></li>

                        <?php //echo log in or log out based on session
                 if(!isset($_SESSION['logged'])) echo "<li><a href='login.php'>log in</a></li>";   
                 else echo "<li><a href='phpscripts/logout.php'>log out</a></li>"; 
             ?>

                    </ul>

                </div>

            </li>


        </ul>

    </header>