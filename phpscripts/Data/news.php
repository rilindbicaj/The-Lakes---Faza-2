<?php

$connection = new PDO("sqlsrv:Server=DESKTOP-CQDRORL;Database=TheLakes", "vesa", "polo123456789");; //Kirjo nje instance te PDO, si parametra dergohen emri i serverit dhe databazes
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

class News{
   private $NewsID;
   private $NewsTitle ;
   private $NewsImg ;
   private $NewsDesc;


    public function __construct($ID){

        global $connection;
        $array=$connection->query("SELECT * FROM NEWS WHERE NewsID=".$ID)->fetch(PDO::FETCH_ASSOC);  //ketu jemi duke krijuar nje array te ciles ne SQL jemi duke ja thirrur nje query ne baze te ID's
               //thirre metoden query te objetit connection              thirret metoda fetch e rezultati psh ID=1

        $this->NewsID=$array['NewsID'];
        $this->NewsTitle=$array['NewsTitle'];
        $this->NewsImg=$array['NewsImg'];
        $this->NewsDesc=$array['NewsDesc'];


        $this->echoNews();
    }

    public function echoNews(){

      echo "<div class='columnContent'>"; 
      echo " <h3>".$this->NewsTitle."</h3>";
      echo " <img class='bordersall' src='".$this->NewsImg."' alt='columnContentpic'>";
      echo " <p>".$this->NewsDesc."</p>";
      echo "</div>";


    }


}



?>