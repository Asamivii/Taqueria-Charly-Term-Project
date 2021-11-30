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

    <title>Home</title>
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
  <img src="image/banner_home.svg" class="bg-image" alt="welcome_page">

  <div class="text-block">
    <p>Expereince The Fusion <br>Of Mexican-American Cuisine</p>
  </div>
</div>


<br><br>

<div class="container">
<div class="row">
  <div class=col-lg-6>
<img src="image/avacado_home.png" alt="avacado" width=100%>
  </div>
  <div class=col-lg-6>
  <br>
<h3>Fresh Ingradient</h3>
<p>In Taqueria Charly we belive that coustomer are to be treated with fresh food. Our food is home grown but we also get fresh deliveries every week to make our food taste like home.</p>
  </div>
</div>
</div>

<br><br><br>

<div class="container">
<div class="row">
  <div class=col-lg-6>
  <video width="100%" controls>
  <source src="asset/cooking_video.mp4" type="video/mp4">
  </video>
  </div>
  <div class=col-lg-6>
  <br>
<h3>Quick Service</h3>
<p>Our service is greatly influenced by our coustomer base, which typically are people who are looking for a quick bite to eat. So, we decided that serving fast and amazing food was our kitchen moto.</p>
  </div>
</div>
</div>

<br><br><br><br><br><br><br>
<div class="container" id="Menu">
<h1>MENU</h1>
<br>
<div class="row menu">

<?php
$sql = "SELECT FoodID, URL, Name, Description, Price FROM Food";
$stmt = $conn->stmt_init();
if ($stmt->prepare($sql)) {
  $stmt->execute();
  $stmt->bind_result($FoodID, $URL, $Name, $Description, $Price);
  while ($stmt->fetch()) {
  echo "<div class='col-xs-12 col-md-6 col-lg-4 text-center pb-3'>
          <form action='manage_cart.php' method='POST'>
            <img src=$URL alt=$Name><br>
            <h4>$Name</h4><br>
            <p>$Description</p>
            <p><strong>$$Price</strong></p>
            <button type='submit' name='Add_To_Cart' class='btn btn-primary'><i class='fas fa-plus' style='color:#FFFFFF;'></i></button>
            <input type='hidden' name='FoodID' value='$FoodID'>
            <input type='hidden' name='ItemName' value='$Name'>
            <input type='hidden' name='Price' value='$Price'>
          </form>
        </div> \n";
            
  }
  $stmt-> close();
}

else {
  print "No items found";
}   
    
$conn-> close();
?>

</div>



</div>
<div class="container"><hr></div>

<br><br><br><br>
<div class="container" style="text-align: center;">
<h1>ORDER FROM YOUR FAVORITE <br> 
FOOD DELIVERY</h1>
<button type="button" class="btn btn-primary ">Order Now</button>
</div>

<!--Coustomer reviews-->
<br><br><br><br><br>
<div class="review" style="background-color:#F3BCCF;">
<br>
<div class="container">
<h1>TESTIMONIALS</h1>
<br><br>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <img  class="col-lg-3 col-md-6" src="image/person1.jpeg" alt="">
            <div class="col-lg-9 col-md-6">
              <h4>Jenny Oliver</h4>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <p><strong>Food item:</strong> 3 Tacos</p>
              <p>“The sauces they packed are especially good, I've never found a red or <strong>green sauce</strong> to complain about but theirs was exceptional in my opinion.”</p>
              <br><br>
              <p>added 3 minutes ago</p>
            </div>
          </div>
        </div>
    </div>
    <div class="carousel-item">
    <div class="container">
          <div class="row">
            <img  class="col-lg-3 col-md-6" src="image/person2.jpeg" alt="">
            <div class="col-lg-9 col-md-6 test">
              <h4>Charles Salazar</h4>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <p><strong>Food item:</strong> Monster Burrito</p>
              <p>“The monster burrito is huge, The tacos are delicious, the service is fast and the employees are very friendly.”</p>
              <br><br>
              <p>added 1 hour ago</p>
            </div>
          </div>
        </div>
    </div>
    <div class="carousel-item">
    <div class="container">
          <div class="row">
            <img  class="col-lg-3 col-md-6" src="image/person3.jpeg" alt="">
            <div class="col-lg-9 col-md-6 test">
              <h4>Ben Chase</h4>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <i class="far fa-star"></i>
              <p><strong>Food item:</strong> Texmex Burger</p>
              <p>"Texmex Burger is the bomb! the sauce is incredible and the meat they use is soo fresh. Also, the toast on the buns are just right!"</p>
              <br><br>
              <p>added 5 hour ago</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<br>
</div>
</div>

    
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
              <li><a href="#Menu">Menu</a></li>
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