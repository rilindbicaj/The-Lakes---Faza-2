<!DOCTYPE html>

<head>

    <title>your cart</title>
    <link rel="icon" href="media/Logo1000px.png">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/mainstyle.php">
    <link rel="stylesheet" href="css/onecolumn.php">
    <link rel="stylesheet" href="css/settings.css">

</head>

<body>

    <?php include 'components/header.php' ?>

    <div class="mainContainer paperBackground bordersall">

        <?php 
        
        
        
        ?>

        <div class="column">

            <h1>general settings</h1>

            <div class="rowFlex">

                <label for="theme">Theme : </label>
                <select name="theme" id="theme">
                    <option value="Dark">Dark</option>
                    <option value="Light">Light</option>
                </select>

            </div>

            <div class="rowFlex">

                <label for="displayName">Display name : </label>
                <span id="displayName">Rilind Bicaj</span>

            </div>

            <div class="rowFlex">

                <label for="displayPassword">Password : </label>
                <span id="displayPassword">click to show</span>

            </div>

            <h2>registered users</h2>

            <div class="column bordersall">

                <div class="rowFlex">
                    <img class="bordersall" src="media/unknownprofile.gif" alt="profilePic">
                    <img src="media/artist separator.png" alt="separator">
                    <span> Rilind Bicaj</span>
                    <span> | </span>
                    <span> 1171181190 </span>
                </div>
                <div class="rowFlex">
                    <img class="bordersall" src="media/unknownprofile.gif" alt="profilePic">
                    <img src="media/artist separator.png" alt="separator">
                    <span> Rilind Bicaj</span>
                    <span> | </span>
                    <span> 1171181190 </span>
                </div>
                <div class="rowFlex">
                    <img class="bordersall" src="media/unknownprofile.gif" alt="profilePic">
                    <img src="media/artist separator.png" alt="separator">
                    <span> Rilind Bicaj</span>
                    <span> | </span>
                    <span> 1171181190 </span>
                </div>  
                </div>

            </div>

        </div>

    </div>

    </main>

    <?php include 'components/footer.php' ?>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/changecss.js"></script>
    <script src="js/settings.js"></script>

</body>

</html>