<!DOCTYPE html>

<head>

    <title>your cart</title>
    <link rel="icon" href="media/SettingsLogo.png">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/mainstyle.php">
    <link rel="stylesheet" href="css/onecolumn.php">
    <link rel="stylesheet" href="css/settings.css">

</head>

<body>

    <?php

    require 'components/header.php';
    require 'phpscripts/echoUsers.php';

    ?>

    <div class="mainContainer paperBackground bordersall">

        <div class="column">

            <h1>general settings</h1>

            <div class="rowFlex">

                <label for="theme">Theme : </label>
                <select name="theme" id="theme">

                <?php

                //Switch indexes based on current theme - needed for JavaScipt to work properly
                
                $theme = 0;
                if(isset($_SESSION['theme'])) $theme = $_SESSION['theme'];

                if($theme == 0) {

                    echo "<option value='Dark'>Dark</option>";
                    echo "<option value='Light'>Light</option>";

                }

                else {

                    echo "<option value='Light'>Light</option>";
                    echo "<option value='Dark'>Dark</option>";

                }
                
                ?>

                </select>

            </div>

            <div class="rowFlex">

                <label for="displayName">Display name : </label>
                <span id="displayName"><?php if(isset($_SESSION['Username'])) echo $_SESSION['Username'];
                                             else echo 'not logged in'?></span>

            </div>

            <div class="rowFlex">

                <label for="displayPassword">Password : </label>
                <span id="displayPassword"><?php if(isset($_SESSION['Password'])) echo $_SESSION['Password'];
                                             else echo 'not logged in'?></span>

            </div>

            <div class="rowFlex">

                <label for="displayPhoto">Profile picture : </label>

                <?php 
                
                    if(isset($_SESSION['Username'])) echo '<img src="media/userprofiles/'.$_SESSION['Username'].'.jpg" id="profilePicture" class="bordersall" alt="">'; 
                    else echo '<img src="media/unknownprofile.gif" class="bordersall" alt="" id="notLogged">';
                
                
                ?>

            </div>

            <div class="rowFlex"></div>

            <!-- Show select users button if the user is an admin -->
            <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 1) echo "<button id='showUsers' onclick='showUsersColumn()'>SHOW ALL USERS</button>" ?>

            <div id="users" class="column usersColumn">

                <?php echoUsers(); ?>

            </div>

        </div>

    </div>

    </div>

    </main>

    <?php require 'components/footer.php'?>
    <script src="js/jquery-3.5.1.min.js"></script> <!--needed for theme preview -->
    <script src="js/changecss.js"></script>
    <script src="js/settings.js"></script>

</body>

</html>