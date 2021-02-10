<!DOCTYPE html>


<head>

    <title>browse artists</title>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link rel="icon" href="media/ArtistIcon.png">
    <link rel="stylesheet" href="css/mainstyle.php">
    <link rel="stylesheet" href="css/onecolumn.php">

</head>

<body>

<?php include 'components/header.php' ?>

        <div class="mainContainer bordersnotop paperBackground">

            <div class="column">
            
            <?php
        
        require 'phpscripts/Data/Artist.php';

         $Artist1=new Artist(1);
         $Artist2=new Artist(2);
         $Artist3=new Artist(3);

         ?>

            </div>
      

            

        </div>

    </main>

    <?php include 'components/footer.php' ?>

</body>

</html>
