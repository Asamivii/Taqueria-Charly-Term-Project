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
    <!--Kit code-->
    <script src="https://kit.fontawesome.com/1d287cacfb.js" crossorigin="anonymous"></script>

    <title>About</title>
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


<div class="ourstore">
<div class="container extra_info">
<div class="row">
  <div class=col-lg-6>
<img src="image/store_about.png" alt="store/chef" width=100%>
  </div>
  <div class=col-lg-6>
  <br>
<h3>Our Staff</h3>
<p>The staff at Taqueria Charly is highly motivated individuals who are ready to serve the coustomers at any time. We strive to make coustomers first to be on our priority list. Our food is made with great proficiency and flavor for any coustomer to come back for more.</p>
  </div>
</div>
</div>
</div>

<br><br><br><br><br><br>
<div class="container">
<div class="row">
<div class="col-lg-6">
<img src="image/delivery_about.png" alt="delivery options" width=100%><br><br>
<p>We partnered up with delivery services in these COVID filled situation in order to expand our reaches to all our coustomers. You can go to DoorDash, Uber-Eats or Grubhub to get easy access and order your meal.</p>
</div>

<div class="col-lg-6">
<img src="image/cater_about.png" alt="catery" width=100%><br><br>
<p>Coustomers can also order catering services for local gathering, birthday parties and etc..., but you need to make the order through call at <strong>(972)801-8611</strong> week in advance.</p>
</div>
</div>
</div>

<br><br><br><br><br><br>
<div class="container" id="Learn_more">
<div class="row">
  <div class=col-lg-6>
<img src="image/learn_about.png" alt="store/chef" width=100%>
  </div>
  <div class=col-lg-6>
  <br>
<h3>Mexican-American Food</h3>
<p>If your not sure about Mexican food or having a combination of American you can checkout the link below to learn more.</p>
<button type="button" class="btn btn-primary">Learn More</button>
</div>
  </div>
</div>
</div>
<br><br><br><br>


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
              <li><a href="#Learn_more">Learn More</a></li>
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