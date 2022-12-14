<?php
$getal1 = $_POST ["getal1"];
$getal2 = $_POST ["getal2"];
$operator = $_POST ["operator"];
 
if(!empty($_POST)){
    $som=$getal1+$getal2;
    $verschil=$getal1-$getal2;
    $deling=$getal1/$getal2;
    $vermenigvuldiging=$getal1*$getal2;
    
    echo "<h1>";
 
    if($operator=="plus")
     echo "$getal1 + $getal2 = $som";
 
    elseif($operator=="min")
    echo "$getal1 - $getal2 = $verschil"; 
 
    elseif($operator=="gedeeld")
    echo "$getal1 / $getal2 = $deling";
 
    elseif($operator=="keer")
    echo "$getal1 * $getal2 = $vermenigvuldiging";
 
    echo "</h1><p><a href=". $_SERVER["PHP_SELF"] . ">Opnieuw</a></p>";
}
?>
 
<html>
<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
getal 1: <input type="text" name="getal1"><br>
getal 2: <input type="text" name="getal2"><br>
<input type="radio" name="operator" value="plus" checked checked>Optellen(+)
<input type="radio" name="operator" value="min">Aftrekken(-)
<input type="radio" name="operator" value="gedeeld">Delen(/) 
<input type="radio" name="operator" value="keer">Vermenigvuldigen(*)
<hr>
<input type="submit" name="rekenen" value="Bereken">
<input type="reset" name="reset" value="Leegmaken">
</form>
</html>