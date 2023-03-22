<?php
    function randomPassport(){
        $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $pass = array();
        $alphaLenght = strlen($alphabet) - 1;
        for ($i = 0; $i <10; $i++){
            $n = rand(0, $alphaLenght);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }
    echo randomPassport();
    ?>