<?php session_start();
if (isset($_POST)) { // if isset looks to see if the $_POST variable exists
  //this for each loop breaks down the $_POST superglobal array to a string and can then assign the string to a variable in the session superglobal called name
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['email'] = $_POST['email'];
}


?>
<!doctype html>
<html lang="en">

<head>
  <title>Hotel Booking</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <link href="https://fonts.googleapis.com/css?family=Acme|Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css">
</head>
<?php include "include/hotels.php";
?>

<body>
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
  <!--fill out form-->
  
    <div class="booking-section">
     
      <form method="post" action="booking.php" role="form" class="booking-box">
        <div>
          <!--This contains the section where the user select in and out date and sends the info to the post superglobal-->
          <legend class = "book_section_headings">Destination Details:</legend><br>
          
            <img src="images/img-book2.png" alt="" class="book-img"><label for="hotel1" class = "book_section_headings">Hotel 1:</label>
            <select class ="inputs" id="allhotels" name="allhotels1">
              <option value="hotel1" name="hotel1">The Table bay hotel</option>
              <option value="hotel2" name="hotel2"> Cape Gace Hotel</option>
              <option value="hotel3" name="hotel3">The Silo Hotel</option>
            </select>
          
          
            <img src="images/img-book2.png" alt="" class="book-img "><label for="hotel2" class = "book_section_headings">Hotel 2:</label>
            <select class ="inputs" id="allhotels" name="allhotels2">
              <option value="hotel1" name="hotel1">The Table bay hotel</option>
              <option value="hotel2" name="hotel2"> Cape Gace Hotel</option>
              <option value="hotel3" name="hotel3">The Silo Hotel</option>
            </select>
          
          <br><br>
          <img src="images/img-book.png" alt="Date icon" class="book-img"><label for="checkin" class = "book_section_headings">Check in date:</label><br>
          <input class ="inputs" type="date" id="checkin" min="<?php  echo date('Y-m-d'); ?>" name="indate"  required>
          <br><br>
          <img src="images/img-book.png" alt="Date icon" class="book-img"><label for="checkout" class = "book_section_headings">Check out date:</label><br>
          <input class ="inputs" type="date" id="checkout" min = "<?php echo date('Y-m-d',strtotime('+1day'));?>" name="outdate" required>

          <!--A button that submits the date into the post superglobal-->
          <button id = "compare" type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Compare</button><br><br>
      </form>
    </div>

  
  </div>

  


</div>

    

    
  </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html> 