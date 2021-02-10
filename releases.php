<!DOCTYPE html>

<head>

    <title>latest releases</title>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link rel="icon" href="media/SpotifyLogo.png">
    <link rel="stylesheet" href="css/mainstyle.php">
    <link rel="stylesheet" href="css/onecolumn.php">

</head>

<body>

    <?php include 'components/header.php' ?>

        <div class="mainContainer paperBackground bordersnotop">

            <div class="column">

                   
                        <?php
                            echo "<h1>latest releases on Spotify</h1>";
                            require 'phpscripts/Data/releases.php';

                            $Releases1=new LatestReleases(5);
                            echo "<img class='separator' src='".$this->VideoPhoto."'>'";
                            $Releases2=new LatestReleases(6);
                            echo "<img class='separator' src='".$this->VideoPhoto."'>'";
                            $Releases3=new LatestReleases(7);

                            ?>

                            </div>




            </div>

        </div>

    </main>

    <?php include 'components/footer.php' ?>

</body>

</html>