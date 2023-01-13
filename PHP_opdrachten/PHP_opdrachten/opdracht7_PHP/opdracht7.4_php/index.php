<!DOCTYPE html>
<head>
<?php
// De variabelen initialiseren(een beginwaarde geven)
$prijs = 0; $korting = 0; $totaaltebetalen = 0;
// De gegevens inlezen uit de variabelen op de interface
if(!empty($_POST)){$prijs   = $_POST["lengte"];$korting  = $_POST["breedte"];
// Hoofdprogramma
$inhoud = $prijs / 100 * (100 - $korting);}
?>
</head>
<body>
<table>
<tr><td>
<!--formulier maken met tekstvelden en knoppen in html -->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
prijs in euro: &nbsp; &nbsp; &nbsp; &nbsp;
<input type="text" name="lengte" value="<?php echo ($prijs); ?>">
<br>korting in %: &nbsp; &nbsp; &nbsp;
<input type="text" name="breedte" value="<?php echo $korting; ?>">
<br>
<input type="submit" name="bereken" value="bereken">&nbsp; &nbsp; &nbsp; &nbsp;
<br><hr><br>De totaal te betalen is:<input type="text" name="inhoud" value="<?php echo $inhoud; ?>">
<!--einde formulier --></form>
</td></tr>
</table>
</body>
</html>