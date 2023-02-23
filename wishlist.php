<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Computerium</title>
    <link rel="icon" type="image/png" href="dummy/logo1.png">
    <!-- Loading third-party fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Loading main CSS file -->
    <link rel="stylesheet" href="stylewebsite2.css">
    <!--[if lt IE 9]>
      <script src="js/ie-support/html5.js"></script>
      <script src="js/ie-support/respond.js"></script>
    <![endif]-->
  </head>
  <body class="header-collapse">
    <div id="site-content">
      <header class="site-header">
        <div class="container">
          <a href="index.html" id="branding">
            <img src="dummy/logo1.png" alt="Site Title">
            <small class="site-description">Only The Best</small>
          </a> 
          <nav class="main-navigation">
            <button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
            <ul class="menu">
              <li class="menu-item"><a href="index.php">Home</a></li>
              <li class="menu-item current-menu-item"><a href="about.php">About</a></li>
              <li class="menu-item"><a href="product.php">Products</a></li>
              <li class="menu-item"><a href="drivers.php">Drivers</a></li>
              <li class="menu-item">
                <a href="loginpage/index.php">
                  <?php
include "server.php";
$sql = mysqli_connect($servername, $gn, $ww, $db);
$query = "SELECT name FROM users";
session_start();
if (isset($_SESSION["name"]))
{
    $name = $_SESSION["name"];
    echo "Account of $name";
}
else
{
    echo "Login";
}
?>
                </a>
              </li>
              <li class="menu-item"><a href="gegevens.php"><img class="loginicon" src="dummy/loginicon.png"></a></li>
            </ul> <!-- .menu -->
          </nav> <!-- .main-navigation -->
          <div class="mobile-menu"></div>
        </div>
      </header> <!-- .site-header -->
      <main class="main-content">
        <div class="fullwidth-block testimonial-section">
          <div class="container">
            <div class="quote-slider">
              <ul class="slides">
                <li>
                  <br>
                  <blockquote>
                    <div>
<?php

if (isset($_POST['add-to-wishlist'])) {
    $naamproduct = $_POST['naamproduct'];
    $prijs = $_POST['prijs'];

    $_SESSION['wishlist'][] = array('naamproduct' => $naamproduct, 'prijs' => $prijs);
}

if (isset($_POST['remove-from-wishlist'])) {
    $index = $_POST['index'];
    unset($_SESSION['wishlist'][$index]);
}
if (isset($_SESSION['wishlist'])) {
    foreach ($_SESSION['wishlist'] as $index => $product) {
        echo '<h2>' . $product['naamproduct'] . ' - ' . $product['prijs'] . '
              <form method="post" style="display:inline">
                  <input type="hidden" name="index" value="' . $index . '">
                  <br>
                  <button type="submit" name="remove-from-wishlist">Remove</button>
              </form>
              </h2>';
    }
} else {
    echo '<p>Your wishlist is empty.</p>';
}
?>

</div> <!-- .feature -->
							</div>
						</div>
					</div> <!-- .container -->
				</div> <!-- .why-chooseus-section -->
			</main> <!-- .main-content -->

<footer class="site-footer">
				<div class="container">
					<img src="dummy/logo-footer1.png" alt="Site Name">
					
					<address>
						<p>50, ISW Hoogeland <br><a href="tel:06122345678">06 12345678</a> <br> <a href="mailto:27239@isw.info">27239@isw.info</a></p> 
					</address> 
					
					<form action="#" class="newsletter-form">
						<input type="email" placeholder="Enter your email to join useless newsletter...">
						<input type="submit" class="button cut-corner" value="Subscribe">
					</form> 
					
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook-square"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div>
					
					<p class="copy">General @ Copyright 2023. All right reserved. Designed by Koen en Auke <a href="https://www.youtube.com/watch?v=u6NOTogsw8M">Koen en Auke designs</a></p>
				</div>
			</footer>

		</div> 

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
				
	</body>

</html>
