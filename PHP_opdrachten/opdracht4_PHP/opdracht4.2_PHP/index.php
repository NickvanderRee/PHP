<!DOCTYPE html>
<html>
<head>

</head>
    <body>
        <?php
            $tijddeel = date('H');

            switch($tijddeel)
            {
                case $tijddeel > 6 && $tijddeel < 12 : echo "Het is ochtend"; break;
                case $tijddeel > 12 && $tijddeel < 18 : echo "Het is middag"; break;
                case $tijddeel > 18 && $tijddeel < 24 : echo "Het is avond"; break;
                case $tijddeel > 24 && $tijddeel < 6 : echo "Het is nacht"; break;
            }
        ?>
    </body>
</html>