<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <title>Beschijving</title>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
  <link href="fonts/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="stylewebsite1.css">
</head>
<body>
  <?php 
    include "server.php";
    $sql = mysqli_connect($servername, $gn, $ww, $db);
    if (isset($_GET["IDproduct"])) {
      $IDproduct = mysqli_real_escape_string($sql, $_GET['IDproduct']);
      $query = "SELECT IDproduct, Naamproduct, Prijs, Beschijving, Merk, Voorraad, Jaarvanproductie, Stroomverbruik FROM items WHERE IDproduct = $IDproduct";
      $resultaat = mysqli_query($sql, $query);
      while (list($IDproduct, $Naamproduct, $Prijs, $Beschrijving, $Merk, $Voorraad, $Jaarvanproductie, $Stroomverbruik) = mysqli_fetch_row($resultaat)) {
        echo "
        <div class='item'>
          <a class='buttoncool' href='product.php'>back to products</a>
          <img src='images/Fotoscpuengpu/$Naamproduct.jpg' class='center'>
          <p>$Beschrijving</p>
        </div>";
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
      <p class="copy">General @ 2023. All rights reserved. Designed by Koen en Auke <a href="https://www.youtube.com/watch?v=u6NOTogsw8M">Koen en Auke designs</a></p>
    </div>
  </footer>
  <script src="js/jquery-1.11.1.min.js"></script>		
  <script src="js/plugins.js"></script>
  <script src="js/app.js"></script>
</body>
</html>