<!DOCTYPE html>

<html>

<head>

    <title>register</title>
    <link rel="icon" href="media/SettingsLogo.png">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/mainstyle.php">
    <link rel="stylesheet" href="css/login.css"> <!-- its the exact same stuff just different text -->
    <link rel="stylesheet" href="css/register.css">

</head>

<body>

    <?php include 'components/header.php' ?>

            <div class="mainContent">

                <form class="login register paperBackground" action="phpscripts/register.php" method="POST" onsubmit="return validateRegister()">

                <ul>

                    <li>register</li>
                    <li><img src="media/Logo1000px.png"></li>
                    <li>username</li>
                    <li><input type="text" value="" name="UsernameField"></li>
                    <li>password</li>
                    <li><input type="password" value="" name="PasswordField"></li>
                    <li>confirm password</li>
                    <li><input type="password" value="" name="ConfirmPasswordField"></li>
                    <li>email</li>
                    <li><input type="text" value="" name="EmailField"></li>
                    <li><input type="submit" name="Register" value="SUBMIT" class="button"></li>
                    <li><a href="login.php">already registered? log in instead</a></li>

                </ul>

                </form>

            </div>

    </main>

    <?php include 'components/footer.php' ?>
    
    <script type="text/javascript" src="js/validate.js"></script>
    <script type="text/javascript" src="js/register.js"></script>

</body>

</html>