<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags and title -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Nvidia Drivers</title>
    <link rel="icon" type="image/png" href="dummy/logo1.png">
    <!-- Fonts and stylesheets -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="stylewebsite1.css">
  </head>

  <body>
    <div id="site-content">
      <!-- Header -->
      <header class="site-header">
        <div class="container">
          <!-- Logo and site description -->
          <a href="index.html" id="branding">
            <img src="dummy/logo1.png" alt="Site Title">
            <small class="site-description">Only The best</small>
          </a>

          <!-- Navigation -->
          <nav class="main-navigation">
            <button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
            <ul class="menu">
              <li class="menu-item"><a href="index.php">Home</a></li>
              <li class="menu-item current-menu-item"><a href="about.php">About</a></li>
              <li class="menu-item"><a href="product.php">Products</a></li>
              <li class="menu-item"><a href="drivers.php">Drivers</a></li>
              <li class="menu-item">
                <?php
                  include "server.php";
                  $sql = mysqli_connect($servername, $gn, $ww, $db);
                  $query = "select name from users";
                  session_start();
                  if (isset($_SESSION["name"])) {
                    $name = $_SESSION["name"];
                    echo "Account of $name";
                  } else {
                    echo "Login";
                  }
                ?>
              </li>
              <li class="menu-item"><a href="gegevens.php"><img class="loginicon" src="dummy/loginicon.png" alt="Login icon"></a></li>
            </ul>
          </nav>
          <div class="mobile-menu"></div>
        </div>
      </header>

      <!-- Main content -->
      <main class="main-content">
        <div class="fullwidth-block gallery">
          <div class="container">
            <div class="content fullwidth">
              <!-- Heading -->
              <h2 class="entry-title">Drivers</h2>

			  <a class='buttoncool' href="drivers.php">show all</a>   
<a class='buttoncool' href="Radeon.php">Radeon</a>
<div id="link1">
  <h3>Nvidia</h3>
  <div class="filterable-items">
    <div class="filterable-item concert">
      <a class="example_c" target="_blank" rel="nofollow" href="https://www.nvidia.com/download/driverResults.aspx/198796/en-us/">
        <span>Nvidia 3060ti</span>
      </a>
    </div>
    <div class="filterable-item concert">
      <a class="example_c" target="_blank" rel="nofollow" href="https://www.nvidia.com/download/driverResults.aspx/198796/en-us/">
        <span>Nvidia 3060</span>
      </a>
    </div>
    <div class="filterable-item concert">
      <a class="example_c" target="_blank" rel="nofollow" href="https://www.nvidia.com/download/driverResults.aspx/198796/en-us/">
        <span>Nvidia 3060</span>
      </a>
    </div>
    <div class="filterable-item concert">
      <a class="example_c" target="_blank" rel="nofollow" href="https://www.nvidia.com/download/driverResults.aspx/198796/en-us/">
        <span>Nvidia 2060</span>
      </a>
    </div>
    <div class="filterable-item concert">
      <a class="example_c" target="_blank" rel="nofollow" href="https://www.nvidia.com/download/driverResults.aspx/198796/en-us/">
        <span>Nvidia 4080</span>
      </a>
    </div>
    <div class="filterable-item concert">
      <a class="example_c" target="_blank" rel="nofollow" href="https://www.nvidia.com/download/driverResults.aspx/198797/en-us/">
        <span>Nvidia 3070</span>
      </a>
    </div>
  </div>
</div>

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