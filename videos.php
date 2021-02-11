<!DOCTYPE html>

<head>

    <title>latest videos</title>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link rel="stylesheet" href="css/mainstyle.php">
    <link rel="stylesheet" href="css/onecolumn.php">
    <link rel="icon" href="media/icovideo.png">

</head>

<body>

<?php include 'components/header.php' ?>

        <div class="mainContainer paperBackground bordersnotop">

            <div class="column">

                <h1>latest videos</h1>

                <?php

                    require 'phpscripts/Data/videos.php';
                
                    $Video1=new Video(1);
                    $Video2=new Video(2);
                    $Video3=new Video(3);
                    $Video4=new Video(4);
                    $Video5=new Video(5);
                    

                ?>
             

            </div>

         </div>

    </main>

    <?php include 'components/footer.php' ?>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/changecss.js"></script>
    <script src="js/settings.js"></script>

</body>

</html>