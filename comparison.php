<?php session_start();
if (isset($_POST)) { // if isset looks to see if the $_POST variable exists
  //this for each loop breaks down the $_POST superglobal array to a string and can then assign the string to a variable in the session superglobal called name
   $_SESSION['name'] =$_POST['name'] ;
   $_SESSION['email'] =$_POST['email'];
  }


?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Acme|Ubuntu&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php include "include/hotels.php" ;
?>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo" class="logo-pic"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">
            <p class="nav-text">Home</p> <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <p class="nav-text">Booking</p>
          </a>
        </li>



      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 ouline-color" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div id ="header_select">
  <h1 id ="select_h1"> Hi <?php echo $_SESSION['name']; ?>, we see you are looking to stay for <?php echo $_POST['duration']?> days, please select hotels to compare and make a booking.</h1>
  </div>
  <!--fill out form-->


<section id="background-color">
          <div class="booking-section">
            <br>
            <form method="post" action="booking.php" role="form" class="booking-box">

              

            
 
    <div >
                <legend>Destination Details:</legend><br>
                <div class="hotel1">
                <img src="images/img-book2.png" alt="" class="book-img"><label for="hotel1">Hotel 1:</label>
                <select id="allhotels" name="allhotels1">
                  <option value="hotel1" name="hotel1">The Table bay hotel</option>
                  <option value="hotel2" name="hotel2"> Cape Gace Hotel</option>
                  <option value="hotel3" name="hotel3">The Silo Hotel</option>
                </select>
                </div>
                <div class="hotel2">
                  <img src="images/img-book2.png" alt="" class="book-img "><label for="hotel2">Hotel 2:</label>
                <select id="allhotels" name="allhotels2">
                  <option value="hotel1" name="hotel1">The Table bay hotel</option>
                  <option value="hotel2" name="hotel2"> Cape Gace Hotel</option>
                  <option value="hotel3" name="hotel3">The Silo Hotel</option>
                </select>
                </div>
                <br><br>
                <img src="images/img-book.png" alt="" class="book-img"><label for="checkin">Check in date:</label><br>
                <input type="date" id="checkin" name="indate" min="2020-01-01" max="2023-12-31" required>
                <br><br>
                <img src="images/img-book.png" alt="" class="book-img"><label for="checkout">Check out date:</label><br>
                <input type="date" id="checkout" name="outdate" min="2020-01-01" max="2023-12-31" required>
                <br>
                <br>
                <button type="submit" name="submit" class="button compare-but">Compare</button><br><br>
            </form>
</div>
    </div>
    <div class="container position">
   
          
    <div class="slidershow middle">

<div class="slides">
  <input type="radio" name="r" id="r1" checked>
  <input type="radio" name="r" id="r2">
  <input type="radio" name="r" id="r3">
  <input type="radio" name="r" id="r4">
  <input type="radio" name="r" id="r5">

  <div class="slide s1">
    <img src="images/img3.jpg" alt="">
  </div>
  <div class="slide">
    <img src="images/img2.jpg" alt="">
  </div>
  <div class="slide">
    <img src="images/img3.jpg" alt="">
  </div>
  <div class="slide">
    <img src="images/img4.jpg" alt="">
  </div>
  <div class="slide">
    <img src="images/img5.jpg" alt="">
  </div>
</div>

<div class="navigation">
  <label for="r1" class="bar"></label>
  <label for="r2" class="bar"></label>
  <label for="r3" class="bar"></label>
  <label for="r4" class="bar"></label>
  <label for="r5" class="bar"></label>
</div>

</section>
</div>
</div> 
    </div>
    

        
          
        
    
    <br>

    <div class="container-2">
      <h3 class="cont-2-text"><b class="number">619,784</b> <br>Thousand hotels to choose from with the latest updated prices in real time</h3>
    </div>

    <br>
  </div>
  <br>

  <!--Icon section-->
  <div class="container">
    <div class="row">
      <div class="col "><img src="images/icon1.png" alt="" width="80px" class="icon-img"><br>
        <h4>Over 100 Hotel Booking Sites</h4>
      </div>
      <div class="col "><img src="images/icon2.png" alt="" width="80px" class="icon-img"><br>
        <h4>Compare all Airlines</h4>
      </div>
      <div class="col "><img src="images/icon3.png" alt="" width="80px" class="icon-img"><br>
        <h4>High-end Entertainment</h4>
      </div>
      <div class="col "><img src="images/icon4.png" alt="" width="80px" class="icon-img"><br>
        <h4>Best Rates Guaranteed</h4>
      </div>
      <div class="col "><img src="images/icon5.png" alt="" width="80px" class="icon-img"><br>
        <h4>Compare Hotels Worldwide</h4>
      </div>
    </div>
    <br>
    <br>
    <footer>
      <p>Posted by: Reece, Ben, Alex</p>
      <p>Copyright@KingLionHotels</p>
    </footer>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>