<!DOCTYPE html>
<html>
<body>
 
<?php
ini_set('display_errors', 0);

if (isset($_REQUEST['calculate']))
{
    $operator = $_REQUEST['operator'];
    $gewicht = $_REQUEST['first_value'];
    $lengte = $_REQUEST['second_value'];

    if ($operator == "make BMI")
    {
        $res = round($gewicht / (($lengte / 100) * ($lengte / 100)) , 1);
        if ($res >= 18.5 && $res <= 25) $antw = "normaal gewicht!, je dieet is prima";
        elseif ($res >= 25 && $res <= 27) $antw = "licht overgewicht!, ik zal iets minder eten";
        elseif ($res >= 27 && $res <= 30) echo $antw = "matig overgewicht!, je moet wel echt wat minder eten";
        elseif ($res >= 30 && $res <= 40) $antw = "ernstig overgewicht!, EET MINDER";
        elseif ($res >= 40) $antw = "ziekelijk overgewicht!, ZOEK EEN DOCTER NU";
        elseif ($res <= 18.5) $antw = "ondergewicht!, eet was meer";
    }

    if ($_REQUEST['first_value'] == NULL || $_REQUEST['second_value'] == NULL)
    {
        echo "<script language=javascript> alert(\"Please Enter Correct values.\");</script>";
    }
}
?>

<form>
<table style="border:groove #00FF99">
 
<tr>
<td style="background-color:LawnGreen; color:black; font-family:'Comic Sans MS'">gewicht</td>
<td colspan="1">
<input name="first_value" type="text" style="color:black"/></td>
</tr>
 
<tr>
<td style="color:red; font-family:'Comic Sans MS'">Select Operator</td>
<td>
<select name="operator" style="width: 90px">
<option>make BMI</option>
</select></td>
</tr>
 
<tr>
<td style="background-color:red; color:black; font-family:'Comic Sans MS'">lengte</td>
<td class="auto-style5">
<input name="second_value" type="text"  style="color:black"/></td> 
</tr>
 
<tr>
<td></td>
<td><input type="submit" name="calculate" value="Calculate" style="color:wheat;background-color:rosybrown" /></td>	 
</tr>
 
<tr>
<td style="background-color:navy;color:white; font-family:'Comic Sans MS'">BMI = </td>
<td style="color:darkblue"><?php echo $res; ?></td>
</tr>

<tr>
<td style="background-color:grey;color:white; font-family:'Comic Sans MS'">result = </td>
<td style="color:darkblue"><?php echo $antw; ?></td>
</tr>		
 
</table>
</form>
 
</body>
</html>
