<!DOCTYPE html>


<head>

    <title>browse artists</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="icon" href="media/ArtistIcon.png">
    <link rel="stylesheet" href="css/mainstyle.php">
    <link rel="stylesheet" href="css/onecolumn.php">

</head>

<body>

    <?php require 'components/header.php' ?>

    <div class="mainContainer bordersnotop paperBackground">

        <div class="column">

            <?php
        
        require 'phpscripts/Data/Artist.php';

         $Artist1=new Artist(1);
         $Artist2=new Artist(2);
         $Artist3=new Artist(3);
         $Artist3=new Artist(4);
         $Artist3=new Artist(5);
         $Artist3=new Artist(6);
         $Artist3=new Artist(7);
         $Artist3=new Artist(8);
         $Artist3=new Artist(9);
         $Artist3=new Artist(10);
         $Artist3=new Artist(11);
         $Artist3=new Artist(12);

         ?>

        </div>




    </div>

    </main>

    <?php require 'components/footer.php' ?>

</body>

</html>