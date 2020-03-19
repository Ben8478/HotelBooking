
<?php session_start(); 


?>
<!doctype html>

<html lang="en">

  <head>
    <title>Booking</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body id= "booking_image">
  <?php include "include/compare.php" ?>
    <h1>Thank you booking <?php  echo $_SESSION["users"] ?></h1>
  <?php 
  $reece = new hotel ('Hotel reece','yes','no','yes','yes','450');
  $ben = new hotel ('Hotel Ben','no','yes','yes','no','550');
  $alex = new hotel ('Hotel alex','yes','yes','yes','yes','600');


?>   
<?php 

switch($_POST['allhotels1']){
case 'hotel1':
  echo $ben->hotel_show();
break;
  case 'hotel2':
    echo $reece->hotel_show();
  break;
  case 'hotel3':
    echo $alex->hotel_show();
  break;

  }
  
switch($_POST['allhotels2']){

  case 'hotel1':
    echo $ben->hotel_show();
  break;
    case 'hotel2':
      echo $reece->hotel_show();
    break;
    case 'hotel3':
      echo $alex->hotel_show();
    break;
  
}
//   if (isset($_POST)){
//     if ($_POST["hotel1"]){
//     echo $ben->hotel_show();
//     }
//     else if ($_POST["hotel2"]){
//       echo $reece->hotel_show();
//     }

//       else if ($_POST["hotel3"]){
//       echo $alex->hotel_show();
//       }
// else {
//   echo "select a Hotel.";
// }
//     }
  
// echo $ben->hotel_price()?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>