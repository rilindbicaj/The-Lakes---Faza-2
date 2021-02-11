<?php

$connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes", "vesa", "polo123456789"); //Kirjo nje instance te PDO, si parametra dergohen emri i serverit dhe databazes
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

class Artist {

    private $ArtistID;
    private $ArtistName;
    private $ArtistDescription;
    private $ImagePath;

    public function __construct($ID) {

        global $connection;

        $SQLStatement = "SELECT * FROM Artists WHERE ArtistID=".$ID;  //Statement to be executed ne databaze
        $array = $connection->query($SQLStatement)->fetch(PDO::FETCH_ASSOC); //Ekzekuto statement, ruaje ne forme te arr assoc dhe ruaje ne nje array

        $this->ArtistID = $array['ArtistID'];
        $this->ArtistName = $array['ArtistName'];
        $this->ArtistDescription = $array['ArtistDecs'];
        $this->ImagePath = $array['ArtistImagePath'];

        $this->echoArtist();

    }

    public function echoArtist() {

        echo "<div class='columnContentRow'>";
        echo "<img class='artistImage bordersall' src='".$this->ImagePath."' alt=''>";
        echo "<img class='artistSeparator separator' src='media/artist separator.png' alt='separator'>";
        echo "<p class='artistText'>".$this->ArtistDescription."</p>";
        echo "</div>";

    }

}

?>