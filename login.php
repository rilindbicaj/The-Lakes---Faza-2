<!DOCTYPE html>

<html>

<head>

    <title>log in</title>
    <link rel="icon" href="media/SettingsLogo.png">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/mainstyle.php">
    <link rel="stylesheet" href="css/login.css">

</head>

<body>

    <?php include 'components/header.php'?>

    <div class="mainContent">

        <form class="login paperBackground" action="phpscripts/login.php" method="POST">

            <ul>

                <li>Log in</li>
                <li><img src="media/Logo1000px.png"></li>
                <li>username</li>
                <li> <input type="text" name="UsernameField"></li>
                <li>password</li>
                <li><input type="password" name="PasswordField" class="glowRed"></li>
                <li><input type="submit" name="LogIn" value="LOG IN" class="button"></li>
                <li><a href=" #">forgot password?</li>
                <li><a href="register.php">not registered?</a></li>
                
            </ul>

        </form>


    </div>


    </main>

    <?php require 'components/footer.php'?>

    <script src="js/validate.js"></script>
    <script src="js/login.js"></script>

</body>

</html>