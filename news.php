<!DOCTYPE html>

<head>

    <title>latest news</title>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link rel="icon" href="media/BookmarkLogo.png">
    <link rel="stylesheet" href="css/mainstyle.php">
    <link rel="stylesheet" href="css/onecolumn.php">
    <link rel="stylesheet" href="css/newsColumns.css">

</head>

<body>

    <?php include 'components/header.php'; ?>

        <div class="mainContainer paperBackground bordersnotop">

            <div class="column">


        <?php

        require 'phpscripts/Data/news.php';

        $News1=new News(1);
        $News2=new News(2);
        $News3=new News(3);

        ?>

        </div>


        <div class="column">

                <?php 
                $News4=new News(4);
                $News5=new News(5);
                $News6=new News(6);
                
                
                ?>

        </div>

    </main>

    <?php include 'components/footer.php' ?>

</body>

</html>