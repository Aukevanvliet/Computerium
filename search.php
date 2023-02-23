<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Products</title>
		<link rel="icon" type="image/png" href="dummy/logo1.png">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		
		<link rel="stylesheet" href="stylewebsite1.css">
		
	</head>
	<body>
	
	<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="dummy/logo1.png" alt="Site Title">
						<small class="site-description">Only The best</small>
					</a> 
					
					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="about.php">About</a></li>
							<li class="menu-item current-menu-item"><a href="product.php">Products</a></li>
							<li class="menu-item"><a href="drivers.php">Drivers</a></li>
							<li class="menu-item"><a href="loginpage/index.php"><?php
							
	include "server.php";
$sql = mysqli_connect($servername, $gn, $ww, $db);
$query = "select name from users";
  session_start();
  if(isset($_SESSION["name"])) {
  $name = $_SESSION["name"];
  echo "Account of $name";}
  else {
	echo "login";
  }

?>
<li class="menu-item"><a href="gegevens.php"><img class="loginicon" src="dummy/loginicon.png"></a></li>
						</ul> 
					</nav> 
					<div class="mobile-menu"></div>
				</div>
			</header>
			
			<?php 
include "server.php";
$sql = mysqli_connect($servername, $gn, $ww, $db);


$query = "select IDproduct, Naamproduct, Prijs, Beschijving, Merk, Voorraad, Jaarvanproductie, Stroomverbruik from items";
$resultaat = mysqli_query($sql, $query);

?>

			

<div class="container">
  <form action="" method="post">
    <div class="row">
      <div class="col-sm-3">
        <div>
		<button class="menu-item" href="product.php">All items</button>
    <br>
  </form>
  <div class="col-xs-4 col-sm-2">
    <div class="thumbnail">
    </div>
  </div>
</div>
                <?php

$conn = new mysqli("localhost", "root", "usbw", "computerium");


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['query'])) {
  $search_query = $_GET['query'];
  

  $search_query = mysqli_real_escape_string($conn, $search_query);
  

  $sql = "SELECT * FROM items WHERE Naamproduct LIKE '%$search_query%' ";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<p>" . $row['Naamproduct'] . "</p>";
      echo "<img src='images/Fotoscpuengpu/" . $row['Naamproduct'] . ".jpg' width='150' height='150'/>";
      echo "<br/><br/>";
      echo "<a href='beschrijving.php?IDproduct=" . $row['IDproduct'] . "' class='button small primary centerbutton'>buy</a>";
      echo "<a class='button small secondary'>" . $row['Prijs'] . "</a>";
	  ?>
	  <form method="post" action="gegevens.php">
	  <input type="hidden" name="naamproduct" value="<?php echo $row['Naamproduct']; ?>">
	  <input type="hidden" name="prijs" value="<?php echo $row['Prijs']; ?>">
	  <button type="submit" name="add-to-wishlist" style="background-color: grey; color: white;">Add to Wishlist</button>
  </form>
  <?php
      

    }
  } else {
    echo "No results found.";
  }
}

?>
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