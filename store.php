<!DOCTYPE html>

<html>

<head>

    <title> the store </title>
    <link rel="icon" href="media/CartIcon.png">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/mainstyle.php">
    <link rel="stylesheet" href="css/onecolumn.php">
    <link rel="stylesheet" href="css/store.css">

</head>

<body>

    <div class="message"> 
        
    <p>ADDED TO CART!</p>

    </div>

    <?php include 'components/header.php' ?>

    <div class="mainContainer paperBackground bordersall">

        <h1>Merch</h1>

        <div class="rowFlex">

            <div id="1" class="columnContent">

                <img class="bordersall" src="media/merch1.png" alt="merchdisplay">
                <h2>Miss Anthropocene version 1</h2>
                <p>$20.99</p>
                <button onclick='addToCart()'>ADD TO CART</button>

            </div>

            <div class="columnContent">

                <img class="bordersall" src="media/merch2.png" alt="merchdisplay">
                <h2>Miss Anthropocene version 2</h2>
                <p>$20.99</p>
                <button>ADD TO CART</button>

            </div>

            <div class="columnContent">

                <img class="bordersall" src="media/merch3.jpg" alt="merchdisplay">
                <h2>Geidi Primes - Old version</h2>
                <p>$39.99</p>
                <button>ADD TO CART</button>

            </div>

            <div class="columnContent">

                <img class="bordersall" src="media/merch4.jpg" alt="merchdisplay">
                <h2>Soccer Mommy - Color Theory sticker pack</h2>
                <p>$5.00</p>
                <button>ADD TO CART</button>

            </div>



        </div>

        <h1>Vinyls</h1>

        <div class="rowFlex">

            <div class="columnContent">

                <img class="bordersall" src="media/merch5.png" alt="merchdisplay">
                <h2>Soccer Mommy - Color Theory vinyl</h2>
                <p>$49.99</p>
                <button>ADD TO CART</button>

            </div>

            <div class="columnContent">

                <img class="bordersall" src="media/merch6.png" alt="">
                <h2>Grimes - Visions vinyl</h2>
                <p>$44.99</p>
                <button>ADD TO CART</button>

            </div>

            <div class="columnContent">

                <img class="bordersall" src="media/merch7.png" alt="">
                <h2>Yeule - Serotonin II vinyl</h2>
                <p>$29.99</p>
                <button>ADD TO CART</button>

            </div>

            <div class="columnContent">

                <img class="bordersall" src="media/merch8.jpg" alt="">
                <h2>Let's Eat Grandma - I'm All Ears vinyl</h2>
                <p>$29.99</p>
                <button>ADD TO CART</button>

            </div>


        </div>

        <h1>Posters</h1>

        <div class="rowFlex">

            <div class="columnContent">

                <img class="bordersall" src="media/merch9.jpg" alt="merchdisplay">
                <h2>Visions poster</h2>
                <p>$20.00</p>
                <button>ADD TO CART</button>

            </div>

            <div class="columnContent">

                <img class="bordersall" src="media/merch10.jpg" alt="merchdisplay">
                <h2>Blond poster</h2>
                <p>$20.00</p>
                <button>ADD TO CART</button>

            </div>

            <div class="columnContent">

                <img class="bordersall" src="media/merch11.jpg" alt="merchdisplay">
                <h2>Visions alternative</h2>
                <p>$15.00</p>
                <button>ADD TO CART</button>

            </div>

            <div class="columnContent">

                <img class="bordersall" src="media/merch12.jpg" alt="merchdisplay">
                <h2>Little Earthquakes poster</h2>
                <p>$20.00</p>
                <button>ADD TO CART</button>

            </div>

        </div>

    </div>

    </main>

    <?php include 'components/footer.php' ?>
    <script src="js/store.js"></script>


</body>

</html>