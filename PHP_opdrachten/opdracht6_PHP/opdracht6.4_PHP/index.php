<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php
        # waardes en berekeningen van de cirkel #
        $cirkel = 8;
        $diameter = $cirkel;
        $straal = $cirkel / 2;
        
        # bereken de oppervlakte #
        echo "de oppervlakte is ";
        echo $straal * $straal * 3.14;
        echo " cm";

        echo "<br><br>";

        # bereken de omtrek #
        echo "de omtrek is ";
        echo $diameter * 3.14;
        echo " cm";
    ?>
</body>
</html>