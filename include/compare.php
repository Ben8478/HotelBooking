<?php
class Hotel
{
    public $name, $Pool, $wifi, $Parking, $security, $price,$image;

    function __construct($name, $Pool, $wifi, $Parking, $security, $price,$image)
    {
        $this->name = $name;
        $this->Pool = $Pool;
        $this->wifi = $wifi;
        $this->Parking = $Parking;
        $this->security = $security;
        $this->price = $price;
        $this->image = $image;
 //a constructor function is used to initialize properties of objects when the object is created, objects are created in hotels.php
    }
    // this function is used to echo out info of the constructor function for the different hotel objects,the date is stored as a string and then by using the strotime function it is changes to seconds that are then converted into days to calculate the amount of money paid to stay at the hotel
    function hotel_show()
    {
        if (isset($_POST)) {
            $date1 = $_POST['indate'];
            $date2 = $_POST['outdate'];
?>
<div class="hotel_compare">
    <div>
    <h1><?php echo "$this->name"; ?></h1>
    </div>
    
        
    <div class = "attr">
        
            <p><?php echo "<strong>Pool</strong><br>$this->Pool"; ?></p>
            <p><?php echo "<strong>Wifi</strong><br>$this->wifi"; ?></p>
            <p><?php echo "<strong>Parking</strong><br>$this->Parking"; ?></p>
            <p><?php echo "<strong>Security</strong><br>$this->security"; ?></p>
            <p><?php echo "<strong>Price per Night <br>R </strong>$this->price"; ?></p>
           
            <p><?php echo "<strong>Price for " . ((strtotime($date2)  - strtotime($date1)) / 86400) . " days <br> R</strong>" . $this->price * ceil(((strtotime($date2)  - strtotime($date1)) / 86400)); ?></p>
        <?php echo "<br><strong>Select</strong><input class = \"radio\"type =\"radio\" name =\"hotel\" value=\"$this->name\"' required>"; ?>
    </div>
    <img src ="images/<?php echo $this->image?>">
        </div>   
        

<?php
        }
    }
}
?>