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

    <title>Order Now</title>
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

<br><br><br>
<div class="container">
<p>Order using our <strong>Online-Ordering System</strong>, or you can also order using the delivery servies below just tap/click the images.</p>
</div>

<br><br>
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-4 col-xs-12"><img src="image/ubereats.png" alt="ubereats" width=100%></div>
<div class="col-lg-3 col-md-4 col-xs-12"><img src="image/doordash.png" alt="doordash" width=100%></div>
<div class="col-lg-3 col-md-4 col-xs-12"><img src="image/grubhub.png" alt="grubhub" width=100%></div>
</div>
</div>

<br><br><br>
<div class="container">
<h2>Order Details</h2>
<hr>
  <div class="row" id="My_cart">
    <div class="col-lg-12 text-center border rounded bg-light my-5">
      <h1>MY CART</h1>
    </div>

    <div class="col-lg-8">
    <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Food ID</th>
      <th scope="col">Food Name</th>
      <th scope="col">Food Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
  <?php
    $total=0;
  
    if(isset($_SESSION['cart']))
    {
      foreach($_SESSION['cart'] as $key => $value)
      {
        $total=$total+$value['Price'];
        echo"
        <tr>
          <td>{$value['FoodID']}</td>
          <td>{$value['ItemName']}</td>
          <td>{$value['Price']}</td>
          <td><input class='text-center' type='number' value='{$value['Quantity']}' min='1' max='5'></td>
          <td>
          <form action='manage_cart.php' method='POST'>
          <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
          <input type='hidden' name='ItemName' value='{$value['ItemName']}'>
          </form>
          </td>
        </tr>
        ";
      }
    }

  ?>
  </tbody>
</table>
    </div>

    <div class="col-lg-4">
      <div class="border bg-light rounded p-4">
        <h4>Total:</h4>
        <h5 class="text-right">$<?php echo $total ?> USD</h5>
        <br>
        <form action="" method="POST">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Name</label>
          <input type="name" class="form-control" id="exampleFormControlInput1" Required>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
          <input type="number" class="form-control bfh-phone" id="exampleFormControlInput1" Required>
        </div>
        <div class="mb-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" Required>
          <label class="form-check-label" for="flexCheckDefault">
            Pay in store
          </label>
        </div>
        <br>
          <label for="exampleFormControlTextarea1" class="form-label">Extra comments</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
          <button type="submit" name="Make_Order" class="btn btn-primary btn-block">Make Order</button>
        </form>
      </div>
    </div>

  </div>

<?php
if(!empty($_SESSION['cart']) && isset($_POST['Make_Order'])) {
  session_destroy();
  echo"<script>alert('Thanks for ordering!');</script>";

} elseif(empty($_SESSION['cart']) && isset($_POST['Make_Order'])) {
    echo "<script>alert('Cart empty :(')</script>";
}
?>



</div>
<br><br><br>



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
              <li><a href="#My_cart">My Cart</a></li>
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