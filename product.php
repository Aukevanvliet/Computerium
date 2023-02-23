
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Computerium</title>
		<link rel="icon" type="image/png" href="dummy/logo1.png">
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
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
if (isset($_SESSION["name"])) {
    $name = $_SESSION["name"];
    echo "Account of $name";
} else {
    echo "login";
}
?>
<li class="menu-item"><a href="gegevens.php"><img class="loginicon" src="dummy/loginicon.png"></a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header>
			
			<?php
include "server.php";
$sql = mysqli_connect($servername, $gn, $ww, $db);
$query = "select IDproduct, Naamproduct, Prijs, Beschijving, Merk, Voorraad, Jaarvanproductie, Stroomverbruik from items";
$resultaat = mysqli_query($sql, $query);
?>

			<main class="main-content">
				<div class="fullwidth-block download">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<h2 class="page-title">PC parts</h2>
								<body>

<div class="container">

				<form method="get" action="search.php">
  <input type="text" name="query" placeholder="Search...">
  <button type="submit">Search</button>
</form>
  <p>From below dropdown menus you can apply filter</p>
  <form action="" method="post">
    <div class="row">
    <div class="col-sm-3">
        <div class="form-group">
            <select class="form-control" name="Merk">
                <option value="">Select Naam</option>
                <option value="AMD">AMD</option>
				<option value="Intel">Intel</option>
				<option value="MSI">MSI</option>
				<option value="Powercolor">Powercolor</option>
				<option value="Asus">Asus</option>
				<option value="Gigabyte">Gigabyte</option>
            </select>
        </div>
	    <div class="col-sm-3">
        <div class="form-group">
            <select class="form-control" name="Prijs">
                <option value="">Select Price Range</option>
                <option value="range1">100 - 200</option>
                <option value="range2">200 - 300</option>
				<option value="range3">300 - 1500</option>
            </select>
        </div>
		<div class="col-sm-3">
        <div class="form-group">
        </div>
    </div>
	<br>
	<button type="submit">Apply</button>
	<br>
</div>
</form>
</div>
								<center><h2>Apply Filter To Check Result</h2><br><center>
<div class="container-fluid">
    <div class="row"><?php
error_reporting(error_reporting() & ~E_NOTICE);
if (isset($_POST['Prijs'])) {
    if ($_POST['Prijs'] == 'range1') {
        $low = 100;
        $high = 200;
    }
    if ($_POST['Prijs'] == 'range2') {
        $low = 200;
        $high = 300;
    }
    if ($_POST['Prijs'] == 'range3') {
        $low = 300;
        $high = 1500;
    }
}
@$Prijs = $_POST['Prijs'];
@$Merk = $_POST['Merk'];
//@$Prijs = $_POST['Prijs'];
include 'server.php';
if (isset($_POST['Prijs']) && isset($_POST['Merk'])) {
    $qry = "SELECT * FROM items
		WHERE Prijs BETWEEN $low AND $high AND Merk ='$Merk'";
}
if (isset($_POST['Prijs']) && isset($_POST['Merk'])) {
    $query = "SELECT * FROM items
		WHERE Prijs BETWEEN $low AND $high AND Merk ='$Merk'";
}
if (isset($_POST['Prijs']) && $_POST['Merk'] == NULL) {
    $query = "SELECT * FROM items
		WHERE Prijs BETWEEN $low AND $high";
}
if (isset($_POST['Merk']) && $_POST['Prijs'] == NULL) {
    $query = "SELECT * FROM items
		WHERE Merk ='$Merk'";
}
if ($_POST['Merk'] == NULL && isset($_POST['Prijs'])) {
    $query = "SELECT * FROM items
		WHERE Prijs BETWEEN $low AND $high";
}
if ($_POST['Merk'] == NULL && $_POST['Prijs'] == NULL) {
    $query = "SELECT * FROM items";
}
$resultaat = mysqli_query($sql, $query);
$num = mysqli_num_rows($resultaat);
if ($num > 0) while ($row = mysqli_fetch_array($resultaat, MYSQLI_ASSOC)) { ?>
        <div class="col-xs-4 col-sm-2">
            <div class="thumbnail">
                <div class="img-wrapper">
				<img src='images/Fotoscpuengpu/<?php echo $row['Naamproduct']; ?>.jpg' width='150' height='150'/>
                </div>
				<div class="caption text-center">Product:<?php echo $row['Naamproduct']; ?></div>
				<a href='beschrijving.php?IDproduct=<?php echo $row['IDproduct']; ?>' class='button small primary'>buy</a>
				<a class='button small secondary'><?php echo $row['Prijs']; ?></a>

    <form method="post" action="gegevens.php">
	<input type="hidden" name="naamproduct" value="<?php echo $row['Naamproduct']; ?>">
	<input type="hidden" name="prijs" value="<?php echo $row['Prijs']; ?>">
	<button type="submit" style="background-color: grey; color: white;" name="add-to-wishlist">Add to Wishlist</button>
</form>
			</div>
        </div>
           <?php
} else {
    echo "<h4>No Result Found</h4>";
} ?>
</div>
</div>
</body>
</html>
							</div>
						</div>
					</div>
				</div>

				
			</main> 

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