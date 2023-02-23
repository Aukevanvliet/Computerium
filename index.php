<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Computerium</title>
		<link rel="icon" type="image/png" href="dummy/logo1.png">
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
		<link href="fonts/font-awesome.min.css" rel="stylesheet">
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
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="about.php">About</a></li>
							<li class="menu-item"><a href="product.php">Products</a></li>
							<li class="menu-item"><a href="drivers.php">Drivers</a></li>
							<li class="menu-item"><a href="loginpage/index.php"><?php
								include "server.php";
								$sql = mysqli_connect($servername, $gn, $ww, $db);
								$query = "select name from users";
								session_start();
								if(isset($_SESSION["name"])) {
									$name = $_SESSION["name"];
									echo "Account of $name";
								} else {
									echo "login";
								}
							?></a></li>
							<li class="menu-item"><a href="gegevens.php"><img class="loginicon" src="dummy/loginicon.png"></a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
			
			<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<div class="content">
									<h2 class="entry-title">The best deals!</h2>
									<figure class="featured-image">
										<img src="dummy/General/wallpaper.jpg" alt="post image">
									</figure>
									<p class="leading">In computers, all the components that are inside are called hardware. These PC components are continuously being developed. Every year, newer and more powerful PC hardware comes onto the market. To benefit from this better performance, it is not always necessary to buy a new computer. Also the exchange of appropriate hardware components can bring the desired success. Buying the right hardware is quite simple. In our computeruniverse hardware store we offer you a huge selection of current hardware components. If you want to buy PC components, you will find exactly the right components in our store. Tune up your computer with powerful components and benefit from the new PC performance. Are you not a fan of ready-made complete PCs and prefer to assemble your computer yourself? In our hardware store you will find exactly the right components.</p>
								</div>
							</div>
							<div class="col-md-4 col-md-push-1">
								<aside class="sidebar">
									<div class="widget">
									 	<h3 class="widget-title">Kinds of hardware</h3>
										<ul class="discography-list">
											<li>
												<figure class="cover"><img src="dummy/plaatjezijkant1.jpg" alt="thumbnail 1"></figure>
												<div class="detail">
													<h3><a href="product.php">Graphics cards</a></h3>
													<span class="price">from $200</span>
												</div>
											</li>
											<li>
												<figure class="cover"><img src="dummy/plaatjezijkant2.jpg" alt="thumbnail 2"></figure>
												<div class="detail">
													<h3><a href="product.php">CPU's</a></h3>
													<span class="price">from $150</span>
												</div>
											</li>
											<li>
												<figure class="cover"><img src="dummy/plaatjezijkant3.png" alt="thumbnail 3"></figure>
												<div class="detail">
													<h3><a href="product.php">Motherboards</a></h3>
													<span class="price">from $175</span>
												</div>
											</li>
											<li>
												<figure class="cover"><img src="dummy/plaatjezijkant4.jpg" alt="thumbnail 4"></figure>
												<div class="detail">
													<h3><a href="product.php">Ram</a></h3>
													<span class="price">from $35</span>
												</div>
											</li>
											<li>
												<figure class="cover"><img src="dummy/plaatjezijkant5.jpg" alt="thumbnail 5"></figure>
												<div class="detail">
													<h3><a href="product.php">HDD/SSD</a></h3>
													<span class="prices">from $50</span>
												</div>
											</li>
										</ul>
									</div>
								</aside>
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