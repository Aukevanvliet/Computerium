<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<title>Gegevens</title>
	<link rel="icon" type="image/png" href="dummy/logo1.png">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
	<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="stylewebsite1.css">
</head>
<body>
	<a class='buttoncool' href='product.php'>Back to products</a>
	<center><h1 style="font-size:300%; color:#B10DC9;">Account INFO</h1></center>
	<?php
		include "server.php";
		$sql = mysqli_connect($servername, $gn, $ww, $db);
		$query = "SELECT name FROM users";
		$resultaat = mysqli_query($sql, $query);
		session_start();
		if (isset($_SESSION["name"])) {
			$name = $_SESSION["name"];
			$user_name = $_SESSION["user_name"]; 
			echo "<h1 class='centergegevens'>You are logged in as $name</h1>";
			echo "<h1 class='centergegevens'>Your username is $user_name</h1>";
		} else {
			echo "<h1 class='centergegevens'>Not logged in</h1>";
		}
	?>
	<br>
	<center><h1 style="font-size:300%; color:#B10DC9;">Wishlist</h1></center>
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
        echo "<h2 class='centergegevens'>" . $product['naamproduct'] . ' - ' . $product['prijs'] . '
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
	<img src="dummy/Band Name/banner1" alt="" class='banner1'>
      <br>
    <footer class="site-footer-banner">
				<div class="container">
					<img src="dummy/banner1.png" alt="Site Name">
					
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