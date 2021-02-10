<?php

$connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes", "vesa", "polo123456789"); //Kirjo nje instance te PDO, si parametra dergohen emri i serverit dhe databazes
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

class Video{
    private $TitleID;
    private $Title;
    private $Link;
    private $VideoDesc;


    public function __construct($ID){

        global $connection;
        $array=$connection->query("SELECT * FROM Video WHERE TitleID"=.$ID)>fetch(PDO::FETCH_ASSOC);

        $this->TitleID=$array['TitleID'];
        $this->Title=$array['Title'];
        $this->Link=$array['Link'];
        $this->VideoDesc=$array['VideoDesc'];
        
        $this->echoVideo();

    }

    public function echoVideo(){
        echo "<div class='columnContent'>";
        echo "<h2>".$this->Title."</h2>";
        echo "<iframe width='80%'height='400px' src='".$this->Link."'</iframe>'";
        echo "<p>".$this->VideoDesc."</p>";
        echo "</div>";
    }
}




?>