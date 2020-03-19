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
    // function compare(){




    // }
 function hotel_show(){
?>
<div style="background-color:aqua; width :30%; display:inline-block; margin-left:5%;">
<div style="text-align:center;">
<h1><?php echo "<br><strong>$this->name</strong><br><br>";?></h1>
 <p><?php echo "<br><strong>Pool</strong><br>$this->Pool<br>"; ?></p>
 <p><?php echo "<br><strong>Wifi</strong><br>$this->wifi<br>"; ?></p>
 <p><?php echo "<br><strong>Parking</strong><br>$this->Parking<br>";?></p>
 <p><?php echo "<br><strong>Security</strong><br>$this->security<br><br>";?></p>
 <input type="checkbox">
 
</div>
</div>
 
 
 

<?php
         

 
}

    function hotel_price(){

        if (isset($_POST)){
        $date1 = $_POST['indate'];
        $date2 = $_POST['outdate'];
        ?>

        <div  style="background-color:aqua; width :10%; display:inline-block"    > 
        <?php echo "<strong>Price for ". ((strtotime( $date2 )  - strtotime($date1))/86400)." days : R</strong>" . $this->price * ((strtotime( $date2 )  - strtotime($date1))/86400);?>
        </div>
        <?php
    }
    }
     }






?>