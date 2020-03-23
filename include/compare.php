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


//a constructor function is used to initialize properties of objects when the object is created, objects are created in hotels.php

    }
// this function is used to echo out info of the constructor function for the different hotel objects,the date is stored as a string and then by using the strotime function it is changes to seconds that are then converted into days to calculate the amount of money paid to stay at the hotel
 function hotel_show(){
    if (isset($_POST)){
        $date1 = $_POST['indate'];
        $date2 = $_POST['outdate'];
?>

<div class="hotel_compare">
<div style="text-align:center;">
<h1><?php echo "<strong>$this->name</strong><br><br>";?></h1>
 <p><?php echo "<strong>Pool</strong><br>$this->Pool<br>"; ?></p>
 <p><?php echo "<strong>Wifi</strong><br>$this->wifi<br>"; ?></p>
 <p><?php echo "<strong>Parking</strong><br>$this->Parking<br>";?></p>
 <p><?php echo "<strong>Security</strong><br>$this->security<br><br>";?></p>
 <p><?php echo "<strong>Price per Night R </strong><br>$this->price<br>";?></p>
 <?php echo "<strong>Price for ". ((strtotime( $date2 )  - strtotime($date1))/86400)." days : R</strong>" . $this->price * ((strtotime( $date2 )  - strtotime($date1))/86400);?>
 <?php echo "<input type =\"checkbox\" name =\"hotel\" value=\"$this->name\"'></div>";?>
</div>
</div>
 

 

<?php
         

 
        }
    }
}
     






?>