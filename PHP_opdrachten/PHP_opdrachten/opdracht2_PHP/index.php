<html>
    <head>

    </head>

    <body>
    <?php

    //  Een voorbeeld van een echo en een print
    echo "<h1>Hallo wereld,</h1>";
    echo "Ik zit op het ";

    // Voorbeeld van een variabele in PHP.
    $schoolnaam = "Techniek College Rotterdam !";

    // Met echo kun je iets op het scherm tonen.
    echo "$schoolnaam";

    echo "<h1>Hallo</h1>";
    echo "Het is ";
    //dit geeft de variabele een waarde.
    $naam = "vandaag ";

    echo $naam;

    //dit bepaald de datum
    echo "Het is vandaag " . date("l") ." ". date("Y/m/d") . "<br>";
 
echo "<br>";
 
echo "Vandaag is het de " . date("z"). "de dag van het jaar<br>";
 
echo "<br>";
 
echo  date("l") . " is de " . date("w") ."de dag van de week<br>";
 
echo "<br>";
 
echo "De maand " . date("F"). " heeft in totaal " . date("t"). " dagen";
 
echo "<br>";
echo "<br>";
 
$DATE =  date("L");
echo "Het jaar " . date("Y"). " en dat jaar is ";
if($DATE == 1) {
    echo "een schrikkeljaar";
}
else {
    echo " geen schrikkeljaar";
}
    ?>
    </body>
</html>