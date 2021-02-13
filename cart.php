<!DOCTYPE html>

<head>

    <title>your cart</title>
    <link rel="icon" href="media/CartLogo.png">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/mainstyle.php">
    <link rel="stylesheet" href="css/onecolumn.php">
    <link rel="stylesheet" href="css/cart.css">

</head>

<body>

<div id="message">

        <p>REMOVED FROM CART!</p>

    </div>

    <?php 
        
            require 'components/header.php';
            require 'phpscripts/Cart/Cart.php';

            $cart = new Cart();
        
        ?>

    

    <div class="mainContainer paperBackground bordersall <?php if(isset($_SESSION['ID'])) echo 'hide'; ?>"> <!--  Hide if user is logged in -->

        <div class="column">

            <h2>you are not logged in</a></h2>
            <img class="notFound look" src="media/artist separator.png" alt="">


        </div>

    </div>

    <div class="wrapper"></div>

    <div class="mainContainer paperBackground bordersall <?php if(!isset($_SESSION['ID']) || !$cart->cartEmpty()) echo 'hide'; ?>"> <!--  Hide if user isnt logged or is logged but cart is empty -->

        <div class="column">

            <h2>your cart is empty. <a href="store.php">buy something first</a></h2>
            <img class="notFound look" src="media/artist separator.png" alt="">


        </div>

    </div>

    <div class="mainContainer paperBackground bordersall <?php if(!isset($_SESSION['ID']) || $cart->cartEmpty()) echo 'hide'; ?>"> <!--  Hide if cart is empty -->

        <div class="column">

            <?php
            
                $cart->getCart();

            ?>

        </div>

    </div>

    </main>

    <?php require 'components/footer.php' ?>
    <script src="js/cart.js"></script>

</body>

</html>