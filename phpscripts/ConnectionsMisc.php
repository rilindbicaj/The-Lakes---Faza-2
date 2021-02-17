<?php

class ConnectionsMisc {

    private $connection;

    public function __construct() {

        $this->connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes", "vesa", "polo123456789");
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    function echoUsers() {
    
        $usersAll = $this->connection->query("SELECT * FROM Users")->fetchAll(PDO::FETCH_ASSOC);    
    
        foreach($usersAll as $user) {
    
            echo '<div class="rowFlex">'; echo "\n";
    
                        echo '<img src="media/userprofiles/'.$user['Username'].'.jpg" class="bordersall" alt="" style="width: 20%; height:auto">'; echo "\n";
                        echo '<img class="separator small look" src="media/artist separator.png" alt="" style="width: 10%; height:auto">'; echo "\n";
                        echo '<p>'.$user['Username'].'</p>'; echo "\n";
    
            echo '</div>';
    
        }
    
    }

    function changeTheme() {

        if(isset($_SESSION['Username'])) { //For non-logged users

            $this->connection->query("UPDATE USERS SET theme={$_POST['theme']} WHERE UserID={$_SESSION['ID']}");
        
            $_SESSION['theme'] = $_POST['theme']; //Because the theme is generated from the Session variable; otherwise it will stay like the time you logged in
        
            unset($_POST['theme']);
        
            echo 'done';
        
        }

    }

}

?>