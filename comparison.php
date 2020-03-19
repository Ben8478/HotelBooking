<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Acme|Ubuntu&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>

      <?php 
      //php comparison include

      ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

    <!--fill out form-->
    
<div class="top-section">
<div class="container">
  <div class="row">
    <div class="col">
      <div class="booking-section">
          <br>
        <form method="post" action= <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> role="form" class="booking-box">
          <!--<fieldset>
          <legend>Personalia:</legend>
          <label for="fname">First name:</label><br>
          <input type="text" id="fname" name="fname" value="">
          <br>
          <label for="lname">Last name:</label><br>
          <input type="text" id="lname" name="lname" value="">
          <br>
          <label for="email">Email:</label><br>
          <input type="email" id="email" name="email" value="">
          <br></fieldset>-->
                <div class="greetings">
                  <?php /*Username*/ ?>
                </div>
          
          <fieldset>
          <legend>Destination Details:</legend><br>
          <img src="" alt=""><label for="hotel1">Hotel 1:</label>
              <select id="allhotels" name="allhotels">
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
              </select>
          
          <img src="" alt=""><label for="hotel2">Hotel 2:</label>
              <select id="allhotels" name="allhotels">
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
              </select>
          <br><br>
          <label for="checkin">Check in date:</label><br>
          <input type="date" id="checkin" name="indate" min="2020-01-01" max="2023-12-31" required>
          <br><br>
          <label for="checkout">Check out date:</label><br>
          <input type="date" id="checkout" name="outdate" min="2020-01-01" max="2023-12-31" required>
          <br>
          <br>
          <button type="submit" name="submit" class="button compare-but">Compare</button><br><br>
      </form> 
      </div>
    </div>

    <div class="col">
      <div class="slidershow middle">
    
        <div class="slides">
          <input type="radio" name="r" id="r1" checked>
          <input type="radio" name="r" id="r2">
          <input type="radio" name="r" id="r3">
          <input type="radio" name="r" id="r4">
          <input type="radio" name="r" id="r5">

          <div class="slide s1">
            <img src="images/img1.jpg" alt="" class="icon-img">            
          </div>
          <div class="slide">
            <img src="images/img2.jpg" alt="" class="icon-img">
          </div>
          <div class="slide">
            <img src="images/img3.jpg" alt="" class="icon-img">
          </div>
          <div class="slide">
            <img src="images/img4.jpg" alt="" class="icon-img">
          </div>
          <div class="slide">
            <img src="images/img5.jpg" alt="" class="icon-img">
          </div>            
        </div>

      <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
        <label for="r5" class="bar"></label>
      </div>
        
      </div>
    </div>

  </div>
</div>
        <br>

        <div class="container-2">
          <h3 class="cont-2-text"><b>619,784</b> <br>Thousand hotels to choose from with the latest updated prices in real time</h3>
        </div>
        
    <br>
</div>
  <br>
  
  <!--Icon section-->
  <div class="container">
  <div class="row">
    <div class="col "><img src="images/icon1.png" alt="" width="100px"><br>
      <h4>Over 100 Hotel Booking Sites</h4>
    </div>
    <div class="col "><img src="images/icon2.png" alt="" width="100px"><br>
      <h4>Compare all Airlines</h4>
    </div>
    <div class="col "><img src="images/icon3.png" alt="" width="100px"><br>
      <h4>High-end Entertainment</h4>
    </div>
    <div class="col "><img src="images/icon4.png" alt="" width="100px"><br>
      <h4>Best Rates Guaranteed</h4>
    </div>       
    <div class="col "><img src="images/icon5.png" alt="" width="100px"><br>
      <h4>Compare Hotels Worldwide</h4>
    </div>
  </div>
  <br>
    







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>