<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <title>Hotel Booking</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body id="booking_image">
  <?php include "include/hotels.php"; ?>
  <!--A navbar imported from bootstrap that contains a link to the homepage-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src = "images/logo.png">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <a class="nav-link" href="index.php">Home </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Contact us</a>
      </li>

    </ul>
  </div>
</nav>
  <img id = "body_img" src ="images/camping.jpg">
</div>
 
  <?php
  ?>
  <!--This form echo's out the compare info by using the method and classes. It also captures the final booking desicion in the form of a checkbox and inserts the info within the Email-->
  <form id = "mail_form" onsubmit="event.preventDefault()">
    <?php
    //this switch statement identifies the hotel and echo the info of the selected hotel by using the method hotel_show
    switch ($_POST['allhotels1']) {
      case ('hotel1'):
        echo $Table_bay->hotel_show();
        break;
      case ('hotel2'):
        echo $Cape_Grace->hotel_show();
        break;
      case ('hotel3'):
        echo $Silo->hotel_show();
        break;
      default:
        echo " choose a hotel";
    }
    switch ($_POST['allhotels2']) {

      case ('hotel1'):
        echo $Table_bay->hotel_show();
        break;
      case ('hotel2'):
        echo $Cape_Grace->hotel_show();
        break;
      case ('hotel3'):
        echo $Silo->hotel_show();
        break;
      default:
        echo " choose a hotel";
    } ?>

    <button type='submit' name="email" onclick = "mail()" class="book_button btn btn-primary">Book hotel</button>
  </form>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <footer>
      <p>Posted by: Reece, Ben, Alex</p>
      <p>Copyright@KingLionHotels</p>
  </footer>
  <script>
    function mail(){
      let mail = $('#mail_form').serialize();
      $.ajax({
        type:'POST',
        url:'mail.php',
        data:mail,
        success:function(data){
    alert(data);
        }
      });
      
    }
    </script>
</body>

</html>