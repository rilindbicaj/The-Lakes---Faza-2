<?php
    
function echoUsers() {

    $connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes", "vesa", "polo123456789");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $usersAll = $connection->query("SELECT * FROM Users")->fetchAll(PDO::FETCH_ASSOC);    

    foreach($usersAll as $user) {

        echo '<div class="rowFlex">'; echo "\n";

                    echo '<img src="media/userprofiles/'.$user['Username'].'.jpg" class="bordersall" alt="" style="width: 20%; height:auto">'; echo "\n";
                    echo '<img class="separator small look" src="media/artist separator.png" alt="" style="width: 10%; height:auto">'; echo "\n";
                    echo '<p>'.$user['Username'].'</p>'; echo "\n";

        echo '</div>';

         }

    }

?>