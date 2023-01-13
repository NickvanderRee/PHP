<!DOCTYPE html>
<html>
<head>

</head>
    <body>
        <?php
            $tijddeel = date('H');
            if( $tijddeel > 6 && $tijddeel < 12)
            {
                echo "Het is ochtend!";
            }

            if($tijddeel > 12 && $tijddeel < 18)
            {
                echo "Het is middag!";
            }

            if($tijddeel > 18 && $tijddeel < 24)
            {
                echo "Het is avond!";
            }

            if($tijddeel > 24 && $tijddeel < 6)
            {
                echo "Het is avond!";
            }
        ?>
    </body>
</html>
