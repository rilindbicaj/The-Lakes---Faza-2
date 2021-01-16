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

    <?php

    include 'components/header.php';

    function echoUsers() {
  
    $conn = sqlsrv_connect("DESKTOP-CQDRORL", array("Database"=>"TheLakes"));

        if(isset($_SESSION['isModerator'])) {
    
            if($_SESSION['isModerator'] === 1) {
    
                $query = sqlsrv_query($conn, "SELECT * FROM Users");
    
                if(!$query)  die(print_r(sqlsrv_errors(),true));
                
                else {

                    echo '<h2>registered users</h2>';
                    echo ' <div class="column bordersall">';
                
                    while($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
    
                    echo '<div class="rowFlex">';
                    echo '<img class="bordersall" src="media/userprofiles/'.$row['Username'].'.jpg" alt="profilePic">';
                    echo '<img class="look" src="media/artist separator.png" alt="separator">'; //look based on theme (invert or otherwise)
                    echo '<span>'.$row['Username'].'</span>';
                    echo '<span> | </span>';
                    echo $row['UserPassword'];
                    echo '</div>';

                    }

                    }
                     
                    
    
                }
    
            }
    
        } 

    ?>

    <div class="mainContainer paperBackground bordersall">

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

                <?php echoUsers(); ?>
               
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