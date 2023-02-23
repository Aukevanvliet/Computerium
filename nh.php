<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'Server.php';
    $connection = mysqli_connect($servername, $gn, $ww, $db)or die("verbinden mislukt");
    ?>

    <?php
    $result = mysqli_query($connection, 'select*from Klantgegevens') or die("verbinden mislukt");
    while(list($IDklant, $Naamklant, $Woonplaats, $Postcode, $Emailadres, $Gebruikersnaam, $Wachtwoord) = mysqli_fetch_row($result)) {
        echo "$IDklant,&nbsp $Naamklant, $Woonplaats, $Postcode, $Emailadres, $Gebruikersnaam, $Wachtwoord" . "<BR>";
        
    }
    ?>
    <?php
    
$result2 = mysqli_query($connection, 'select*from items') or die("verbinden mislukt");
while(list($IDproduct, $Naamproduct, $Prijs, $beschijving, $Merk, $Voorraad, $Jaarvanproductie, $Stroomverbruik) = mysqli_fetch_row($result2)) {
    echo "$IDproduct,&nbsp $Naamproduct, $Prijs, $beschijving, $Merk, $Voorraad, $Jaarvanproductie, $Stroomverbruik" . "<BR>";
    
}
    ?>

    
</body>
</html>