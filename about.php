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
    <link rel="stylesheet" href="stylewebsite1.css">
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
                    <h3>Hoi, ik ben Koen en ik wil graag mijn ervaring delen over het ontwerpen van een online webshop voor computer onderdelen. Ik heb altijd al een passie gehad voor computers en technologie en het starten van mijn eigen webshop was een langgekoesterde droom. Na maanden van onderzoek, planning en ontwikkeling, ben ik eindelijk trots om te zeggen dat mijn webshop online is en klaar voor klanten.

Het ontwerpen van een online webshop vereist veel meer dan alleen het creëren van een website. Het begint allemaal met het identificeren van de behoeften van de klant en het begrijpen van de markt. Ik heb veel tijd besteed aan het onderzoeken van de markttrends en de behoeften van de klant, om zo mijn assortiment te bepalen en de functionaliteit van mijn webshop te bepalen.

Daarnaast was het ook belangrijk om de juiste tools en platformen te selecteren om mijn webshop te ontwikkelen en te hosten. Ik heb gekozen voor een gebruiksvriendelijk platform met veel aanpassingsmogelijkheden, zodat ik mijn webshop volledig kon personaliseren naar mijn eigen wensen en behoeften.

Nu mijn webshop online is, blijf ik er hard aan werken om de beste klantenservice te bieden en mijn assortiment up-to-date te houden met de nieuwste en beste computer onderdelen. Het ontwerpen van mijn eigen online webshop is een uitdagende maar zeer belonende ervaring geweest, en ik ben blij dat ik deze kans heb genomen om mijn passie te volgen.</h3>
                    <cite>Koen Langelaan</cite>
                    <span>Website Designer</span>
                  </blockquote>
                </li>
                <li>
                  <blockquote>
                    <h3>Hallo, mijn naam is Auke en ik deel graag mijn ervaring met het ontwerpen van een online webshop voor computer onderdelen. Als fervent computerliefhebber, wilde ik al een tijdje mijn eigen webshop starten om anderen te helpen bij het vinden van de beste computeronderdelen.

Bij het ontwerpen van mijn webshop begon ik met het maken van een lijst van de belangrijkste onderdelen die ik wilde aanbieden en de bijbehorende merken en modellen. Daarna heb ik veel onderzoek gedaan naar de verschillende e-commerce platforms en de functies die ze bieden. Uiteindelijk heb ik gekozen voor een platform dat me veel flexibiliteit gaf bij het ontwerpen van mijn website en het beheren van mijn inventaris.

Het ontwerpen van de website was een uitdagende maar lonende ervaring. Ik wilde een eenvoudig en gebruiksvriendelijk ontwerp dat mijn klanten zou helpen bij het vinden van wat ze zochten. Daarom heb ik veel tijd besteed aan het ontwikkelen van een goed gestructureerde navigatie en een zoekfunctie die gebruikers snel naar de juiste producten leidt.

Nu mijn webshop live is, ben ik blij dat ik anderen kan helpen bij het vinden van de juiste computeronderdelen. Ik blijf eraan werken om mijn inventaris up-to-date te houden en om mijn klanten de best mogelijke service te bieden. Het starten van een online webshop is een uitdagend proces, maar ik ben blij dat ik de sprong heb gewaagd en mijn passie heb kunnen volgen.</h3>
										<cite>Auke van Vliet</cite>
										<span>Web Designer</span>
									</blockquote>
								</li>
							</ul>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

				<div class="fullwidth-block upcoming-event-section" data-bg-color="#191919">
					<div class="container">
						<header class="section-header">
						


						</header> <!-- .section-header -->
						<div class="event-carousel">
							
							<div class="event">
								<div class="entry-date">
									<div class="date">our</div>
									<span class="month">site</span>
								</div>
								<h2 class="entry-title"><a href="#">In computers, all the components that are inside are called hardware. These PC components are continuously being developed. Every year, newer and more powerful PC hardware comes onto the market. To benefit from this better performance, it is not always necessary to buy a new computer. Also the exchange of appropriate hardware components can bring the desired success. Buying the right hardware is quite simple. In our computeruniverse hardware store we offer you a huge selection of current hardware components. If you want to buy PC components, you will find exactly the right components in our store. Tune up your computer with powerful components and benefit from the new PC performance. Are you not a fan of ready-made complete PCs and prefer to assemble your computer yourself? In our hardware store you will find exactly the right components.</a></h2>
				<div class="fullwidth-block why-chooseus-section">
					<div class="container">
						<h2 class="section-title">Reviews</h2>

						<div class="row">
							<div class="col-md-4">
								<div class="feature">
									<figure class="cut-corner">
										<img src="dummy/Band Name/music-pics-23.jpg" alt="" height="230">
									</figure>
									<h3 class="feature-title">Betty</h3>
									<p>Deze website voor computeronderdelen heeft mijn verwachtingen overtroffen. Het aanbod is zeer uitgebreid en gevarieerd, waardoor het gemakkelijk is om alles te vinden wat je nodig hebt voor jouw computer. De site is zeer goed ontworpen en gemakkelijk te navigeren, wat het vinden van de juiste onderdelen een eenvoudige taak maakt. De prijzen zijn zeer redelijk en in sommige gevallen zelfs lager dan op andere websites. Daarnaast is de informatie die wordt verstrekt over de producten, zoals technische specificaties, compatibiliteit en klantbeoordelingen, uitstekend. Al met al is deze website een geweldige plek om computeronderdelen te kopen.</p>
								</div> <!-- .feature -->
							</div>
							<div class="col-md-4">
								<div class="feature">
									<figure class="cut-corner">
										<img src="dummy/Band Name/youtube-music-playlist.jpg" alt="">
									</figure>
									<h3 class="feature-title">Gerrit</h3>
									<p>Deze website voor computeronderdelen heeft een uitstekende selectie van onderdelen voor elk type computer. De site is zeer overzichtelijk en gebruiksvriendelijk, wat het vinden van de juiste onderdelen zeer eenvoudig maakt. Het aanbod van producten is breed en er zijn veel keuzes beschikbaar voor de verschillende prijsklassen. De prijzen zijn zeer competitief en de website biedt ook deals en kortingen voor de klanten. Ik ben zeer tevreden met de kwaliteit van de producten die ik heb besteld en de snelheid waarmee ze zijn geleverd. Ik zou deze website zeker aanbevelen aan iedereen die op zoek is naar computeronderdelen.</p>
								</div> <!-- .feature -->
							</div>
							<div class="col-md-4">
								<div class="feature">
									<figure class="cut-corner">
										<img src="dummy/Band Name/5261_Electronics_Music_Production_pic_1 - Copy.jpg" alt="">
									</figure>
									<h3 class="feature-title">Pieter</h3>
									<p>Deze website voor computeronderdelen heeft een indrukwekkend aanbod van onderdelen, van de nieuwste grafische kaarten en processoren tot ventilatoren en koelers. De site is zeer goed ontworpen en zeer gemakkelijk te navigeren, waardoor het vinden van de juiste onderdelen snel en eenvoudig is. De prijzen zijn zeer concurrerend en er zijn vaak kortingen beschikbaar. Ik ben erg blij met de kwaliteit van de producten die ik heb besteld, en ook met de snelle levering en uitstekende klantenservice. Kortom, deze website is de perfecte keuze voor iedereen die op zoek is naar kwaliteitsvolle computeronderdelen tegen betaalbare prijzen.</p>
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
