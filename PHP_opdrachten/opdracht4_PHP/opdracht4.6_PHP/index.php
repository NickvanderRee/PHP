<!DOCTYPE html>
<html lang="en">
<head>

</head>
    <body>
        <?php
            $time = date("H");
            $temperatuur = 18;
            $luchtvochtigheid = 80;

            if($time > 17 || $temperatuur < 20 && $luchtvochtigheid < 85)
            {
                echo "de airco is uit";
            }
            else
            {
                echo "de airco is aan";
            }
        ?>
    </body>
</html>