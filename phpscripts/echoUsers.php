<?php
    
function echoUsers() {

    $connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes", "vesa", "polo123456789");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $usersAll = $connection->query("SELECT * FROM Users")->fetchAll(PDO::FETCH_ASSOC);    

    foreach($usersAll as $user) {

        echo '<div class="rowFlex">';

                    echo '<img src="media/userprofiles/'.$user['Username'].'.jpg" class="bordersall" alt="" style="width: 20%; height:auto">';
                    echo '<img class="separator small" src="media/artist separator.png" alt="" style="width: 10%; height:auto">';
                    echo '<p>'.$user['Username'].'</p>';

        echo '</div>';

         }

    }

?>