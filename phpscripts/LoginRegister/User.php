<?php 

class User {

    private $id;
    private $username;
    private $email;
    private $role;
    private $theme;

    public function __construct($array) { //Whether the array is set or not is checked in the Login class; $array in this case is an assoc array returned from a query

        $this->id = $array['UserID'];
        $this->username = $array['Username'];
        $this->email = $array['email'];
        $this->role = $array['isModerator'];
        $this->theme = $array['theme'];

    }

    //GETTERS

    public function getID() {

        return $this->id;

    }

    public function getUsername() {

        return $this->username;

    }

    public function getEmail() {

        return $this->email;

    }

    public function getRole() {

        return $this->role;

    }

    public function getTheme() {

        return $this->theme;

    }

}

?>