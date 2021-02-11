<?php  

$connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes", "vesa", "polo123456789"); //Kirjo nje instance te PDO, si parametra dergohen emri i serverit dhe databazes
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

class LatestReleases{
    private $VideoID;
    private $VideoName;
    private $VideoLink;
    private $VideoPhoto;


    public function __construct($ID){
        global $connection;
        $array=$connection->query("SELECT * FROM LatestReleases WHERE VideoID=".$ID)->fetch(PDO::FETCH_ASSOC);

        $this->VideoID=$array['VideoID'];
        $this->VideoName=$array['VideoName'];
        $this->VideoLink=$array['VideoLink'];
        $this->VideoPhoto=$array['VideoPhoto'];
        
        $this->echoLatestReleases();

    }
    public function echoLatestReleases(){
       echo "<div class='columnContent'>";
       echo "<h3>".$this->VideoName."</h3>";
       echo "<iframe class='bordersall' src='".$this->VideoLink."'></iframe>";
       echo "</div>";
    }

}






?>