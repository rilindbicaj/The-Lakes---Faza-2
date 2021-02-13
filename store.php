<!DOCTYPE html>

<html>

<head>

    <title> the store </title>
    <link rel="icon" href="media/CartLogo.png">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/mainstyle.php">
    <link rel="stylesheet" href="css/onecolumn.php">
    <link rel="stylesheet" href="css/store.css">

</head>

<body>

    <div class="message"> 
        
    <p>ADDED TO CART!</p>

    </div>

    <?php 
    
        require 'components/header.php';
        require 'phpscripts/Cart/Product.php';

    ?>

     <div class="mainContainer paperBackground bordersall <?php if(!isset($_SESSION['Username'])) echo 'hidden';?>"> <!--Disable store if nobody is logged in -->

        <h1>Merch</h1>

        <div class="rowFlex">

            <?php
            
            $product1 = new Product(1, "store");
            $product2 = new Product(2, "store");
            $product3 = new Product(3, "store");
            $product4 = new Product(4, "store");
            
            ?>

        </div>

        <h1>Vinyls</h1>

        <div class="rowFlex">

           <?php 
           
            $product5 = new Product(5, "store");
            $product6 = new Product(6, "store");
            $product7 = new Product(7, "store");
            $product8 = new Product(8, "store");
           
           ?>

        </div>

        <h1>Posters</h1>

        <div class="rowFlex">

        <?php 
           
           $product9 = new Product(9, "store");
           $product10 = new Product(10, "store");
           $product11 = new Product(11, "store");
           $product12 = new Product(12, "store");
          
          ?>

        </div>

    </div>

    <div class="mainContainer mainContainer paperBackground bordersall <?php if(isset($_SESSION['Username'])) echo 'hidden';?>">
    
        <h3 id="notLogged">our store is not available to non-users</h3>
        <img class="notFound look" src="media/artist separator.png" alt="">

    </div>

    </main>

    <?php require 'components/footer.php' ?>
    <script src="js/store.js"></script>


</body>

</html>