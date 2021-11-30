<?php 
include ('dbconn.inc.php');
$conn=dbConnect();

session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--My Css/other-->
    <link rel="shortcut icon" type="img/png" href="asset/logoWHT2.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!--Kit code-->
    <script src="https://kit.fontawesome.com/1d287cacfb.js" crossorigin="anonymous"></script>

    <title>Contact</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="index.php"><img src="asset/logoBLK.png" alt="TC" width="85%"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
    <div>
    <?php 
          $count=0;
          if(isset($_SESSION['cart'])){
            $count=count($_SESSION['cart']);
          }
        ?>
        <a class="nav-link btn btn-outline-success" href="order_now.php">Order Now (<?php echo $count; ?>)</a>
    </div>
  </div>
</nav>
<!--END-->
<div class="image">
  <img src="image/chili_banner.svg" class="bg-image" alt="contact_page">

  <div class="text-block2">
    <p>Lets Get In Touch</p>
  </div>
</div>

<div class="wrapper_find">
<div class="container wrapper_text">
<h1>FIND OUT MORE <br> 
ABOUT US</h1>
<button type="button" class="btn btn-light">Click Here</button>
</div>
</div>

<br><br><br>
<div class="container">
<h2>Contact Us</h2>
<br><br>
<div class="row">
<div class="col-lg-4">
<h3>Stay Connected</h3>
<p>Coustomers are highly encouraged to <strong>get in touch</strong> with us at Taqueria so that we can learn and better serve your need and necessities.</p>
<p><strong>Email:</strong> TaqueriaCharly@gmail.com</p>
<p><strong>Phone:</strong> (972) 801-8611</p>
<br>
<p>4002 N Belt Line Rd,<br>Irving, TX 75038</p>
<br>
<h3>Open Hours</h3>
<p>Mon-Fri: 6:30AM-10PM<br>Sat: 10AM-10PM<br>Sun: 10AM-9PM</p>
</div>
<div class="col-lg-8 contact_form" id="contact">
<form action="" method="POST">
  
  <input type="text" class="contact_item" name="name" placeholder="Name" required><br>
  <input type="email" class="contact_item" name="email" placeholder="E-mail" required><br>
  <input type="number" class="contact_item" name="phone" placeholder="Phone"><br>
  <textarea name="comment" class="contact_item" id="" cols="30" rows="5" placeholder="Comment here" required></textarea><br><br>

  <input type="submit" class="btn btn-primary" name="submit">
</form>
</div>
</div>
</div>

<!--Google Maps Script-->
<br><br><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3351.3967998678845!2d-96.99352474897954!3d32.86121928690036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e821602a6b0bd%3A0xaa209f6fe4aee964!2sTaqueria%20Charly!5e0!3m2!1sen!2sus!4v1605931160711!5m2!1sen!2sus" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<!--END-->



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>

   <!-- Site footer -->
   <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">This was a CTEC 4321 Term project made by yours truly. Project is based on a local Mexican-American resturant that serves great food at a decent price.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="#contact">Contact Form</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="order_now.php">Order Now</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">CTEC 4321 | UTA | TERM PROJECT | FALL 2020 | ADIL AHMED SAMI</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="https://www.facebook.com/pages/Taqueria-Charly-2/1824229594283018"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
</footer>
</html>