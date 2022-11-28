<!DOCTYPE html>
<html lang="en">
<head>

</head>
    <body>
        <?php
            $leeftijd = 19;
            $heeftstempas = true;

            if($leeftijd > 16)
            {
                echo "je mag een rijbewijs halen <br>";
            }
            else
            {
                echo "je mag geen rijbewijs halen <br>";
            }

            if( $leeftijd > 18 && $heeftstempas)
            {
                echo "<br> je mag stemmen";
            }
            else
            {
                echo "<br> je mag niet stemmen";
            }
        ?>
    </body>
</html>