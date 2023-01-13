<!DOCTYPE html>
<html lang="en">
<head>

</head>
    <body>
        <?php
            $spaargeld = 1050;
            $product = 1000;
            $tekort = $spaargeld - $product;

            if($tekort > -1)
            {
                echo "je hebt genoeg geld";
            }
            if ($tekort > 49)
            {
                echo " en je kan nog een hoesje kopen";
            }
            else if($tekort < 0 && $tekort > -249)
            {
                echo "je net niet genoeg geld";
            }
            else if($tekort < -250)
            {
                echo "je kan beter een baan zoeken";
            }
        ?>
    </body>
</html>