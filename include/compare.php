<?php
class Hotel {
    public $name,$Pool,$wifi ,$Parking,$security,$price;

    function __construct($name,$Pool,$wifi ,$Parking,$security,$price)
    {
        $this -> name=$name;
        $this -> Pool=$Pool;
        $this -> wifi = $wifi;
        $this -> Parking = $Parking;
        $this -> security = $security;
        $this -> price = $price;




    }
    function compare(){




    }
 function hotel_show(){
  

   
     
     

echo "<div style = 'background-color : aqua;' width: 30%;><br><strong>$this->name</strong><br><br></div>";
echo "<div style = 'background-color : aqua;' width: 30%;><br><strong>Pool</strong><br>$this->Pool<br></div>";
echo "<div style = 'background-color : aqua;' width: 30%;><br><strong>Wifi</strong><br>$this->wifi<br></div>";
echo "<br><strong>Parking</strong><br>$this->Parking<br>";
echo "<br><strong>Security</strong><br>$this->security<br><br>";

     
          
     
    }

    function hotel_price(){

        if (isset($_POST)){
        $date1 = $_POST['indate'];
        $date2 = $_POST['outdate'];
        echo "<strong>Price for ". ((strtotime( $date2 )  - strtotime($date1))/86400)." days : R</strong>" . $this->price * ((strtotime( $date2 )  - strtotime($date1))/86400);
        }
    }
     }


    



?>