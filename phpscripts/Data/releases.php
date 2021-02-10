<?php  

$connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes", "vesa", "polo123456789"); //Kirjo nje instance te PDO, si parametra dergohen emri i serverit dhe databazes
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

class Releases{
    private $ID;
    private $VideoName;
    private $VideoLink;
    private $VideoPhoto;


    public function __construct($ID){
        global $connection;
        $array=$connection->query("SELECT * FROM NEWS WHERE NewsID=".$ID)->fetch(PDO::FETCH_ASSOC);

    }

}






?>