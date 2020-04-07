<!doctype html>
<html lang="en">

<head>
  <title>Hotel Booking</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <link rel="stylesheet " type="text/css" href="css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body id="body_image">
<!--A navbar imported from bootstrap-->
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
            <p class="nav-text">Contact us</p>
          </a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 ouline-color" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div id="header_position">
    <h1 id=" header_main">Welcome to K&L Hotels</h1>
  </div>
  <!-- A form to capture initial user information and send it to the post super global that will store it as a session superglobal variable-->
  <form action="comparison.php" method="POST">
    <div id="user_info">
      <div id="color_form">
        <div id="centre_form">
          <p class="general_padding">Name and surname: <input type="text" class="form-control" name="name" placeholder="Enter your name and surname" required></p>
          <p class="general_padding"> Email: <input class="form-control" type="email" name="email" placeholder="Enter your email" required></p>
          <div class="general_padding">
            <div class="button_position">
              <button type="submit" value="submit" class="button">Submit</button>
            </div>
          </div>
  </form>
</div>
</br>
  <footer style="margin-top:30%;">
    <p>Posted by: Reece, Ben, Alex</p>
    <p>Copyright@KingLionHotels</p>
  </footer>
</body>

</html>