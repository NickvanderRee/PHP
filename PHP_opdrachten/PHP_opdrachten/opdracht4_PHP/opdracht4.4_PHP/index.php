<!DOCTYPE html>
<html>
<head>

</head>
    <body>
        <?php
        //Opdracht 4.4: maak een script met producten en prijzen.
        // Verhoog producten met 19% als ze hoger zijn dan 150 euro .Producten die goedkoper zijn dan 55 euro worden 11% duurder.

        $product = 60;

        if($product > 150)
        {
           echo $product * 1.19;
        }

        else if($product < 55)
        {
          echo  $product * 1.11;
        }
        else if($product > 55)
        {
          echo  $product;
        }

        ?>
    </body>
</html>
