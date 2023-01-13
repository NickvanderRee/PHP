<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php 
        $min = 1; //minimaal getal
        $max = 9; //maximaal getal
        $n = 10;
 
        echo (rand(1,9)),(rand(1,9)),(rand(1,9)),(rand(1,9)); // 4x een random nummer
 
        function getRandomString($n)
        {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
 
        for ($i = 0; $i < 2; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
 
        return $randomString;
        }
 
         echo " "; //maakt een spatie
 
        echo getRandomString( $n); //random letter
    ?>
</body>
</html>