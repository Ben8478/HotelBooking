<!doctype html>
<html lang="en">

<head>
  <title>Hotel Booking</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet " type="text/css" href="css/style.css">
</head>

<body>
  
<div id = body_image>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src = "images/logo.png">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <button class="nav-link"  onclick = "show_details()" >Bookings</button>
      </li>
      <li class="nav-item">
      <button class="nav-link"  onclick = "show_contact()" >Contact us</button>
      </li>

    </ul>
  </div>
</nav>
  <img id = "body_img" src ="images/camping.jpg">
  <h3 id = "get_started">Click on bookings to get started</h3>
</div>
<div id = "details" class= "modal">
<div id = user_signup>
<div id="user_info">
<form action="comparison.php" method="POST">
  

          <p class="general_padding">Name and surname: <input type="text" class="form-control" name="name" placeholder="Enter your name and surname" required></p>
          <p class="general_padding"> Email: <input class="form-control" type="email" name="email" placeholder="Enter your email" required></p>
          <div class="general_padding">
          <div class="button_position">
          <button type="submit" id = "sign_up_button" class="btn btn-primary">Make a booking</button>
         
          </form>


  
  </div>

</div>

</div>
<button id = "close_button"class="btn btn-primary"  onclick = "close_this()" >Close</button>
</div>
</div>
<div id = "contact" class= "modal">
<div id="user_info">
<p>Email: bdekcock8@icloud.com</p>
<p>Cellphone: 082 899 5320</p>
<button id = "close_button"class="btn btn-primary"  onclick = "close_contact()" >Close</button>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<script>
  function show_details(){
    document.getElementById('details').style.display = "flex";
  }
  function show_contact(){
    document.getElementById('contact').style.display = "flex";
  }
  
  </script>
  <script>
    function close_this(){
    document.getElementById('details').style.display = "none";
  }
  function close_contact(){
    document.getElementById('contact').style.display = "none";
  }
    </script>
    
</html>