<!DOCTYPE html>

<head>

    <title>the lakes</title>
    <link rel="icon" href="media/Logo1000px.png">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/mainstyle.php">

</head>

<body>

    <?php
    
    include 'components/header.php';
    
    function indexContent($content) {

        if($content === 'profile') {

            if (isset($_SESSION['Username'])) echo 'media/userprofiles/'.$_SESSION['Username'].'.jpg';
            else echo 'media/unknownprofile.gif';

        }

        else if ($content === 'user') {

            if (isset($_SESSION['Username'])) echo $_SESSION['Username'];
            else echo 'user';

        }

    }
    
    ?>

        <div class="loginLogo">

            <?php if(!isset($_SESSION['logged'])) echo '<a href="Login.php">log in</a>'?>

            <img src="media/LogoWNAME.png" id="logoText" alt="Website logo">

            <?php if(!isset($_SESSION['logged'])) echo '<a href="register.php">no account? sign up</a>'?>

        </div>

        <div class="row">

            <div class="userForm bordersall paperBackground">

                <ul>

                    <li><img src="<?php indexContent('profile')?>" id="profilePic" alt=""></li>
                    <li class="usernameCenter">welcome, <?php indexContent('user') ?></li>
                    <li><a href="cart.php"><img src="media/CartLogo.png" alt=""></a></li>
                    <li><a href="cart.php">your cart</a></li>
                    <li><a href="bookmarks.php"><img src="media/BookmarkLogo.png" alt=""></a></li>
                    <li><a href="bookmarks.php">bookmarks</a></li>
                    <li><a href="yourartists.php"><img src="media/ArtistIcon.png" alt=""></a></li>
                    <li><a href="yourartists.php">your artists</a></li>
                    <li><a href="settings.php"><img src="media/SettingsLogo.png" alt=""></a></li>
                    <li><a href="settings.php">settings</a></li>

                </ul>


            </div>

            <div class="mainContent bordersall paperBackground">

                <div id="slideshow">

                    <div class="slideTitle">

                        <img src="media/artist separator.png" class="look" alt="">

                        <span>general news</span>

                        <img src="media/artist separator.png" class="look" alt="">


                    </div>

                    <img id="slideshowImage" class="bordersall" src="media/visions.png" alt="slideshow" onclick=linkTo(url)>

                    <div id="slideDotsContainer">

                        <span class="one slideDots dotsClicked"></span>
                        <span class="two slideDots"></span>
                        <span class="three slideDots"></span>
                        <span class="four slideDots"></span>

                    </div>



                </div>

                <p id="slideshowText"> Looking back - "Visions" by Grimes, released February 2012 </p>

            </div>


        </div>

    </main>

    <?php include 'components/footer.php' ?>

    <script type="text/javascript" src="js/index.js"></script>

</body>

</html>