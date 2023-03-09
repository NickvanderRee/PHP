<?php
    //Auteur: Nick
    //Laat alle brouwers in de database zien

    //Initialisatie
    include 'functions.php';

    //Main

    //Verbind met database
    $conn = ConnectDB();

    //Print alle brouwers van de database
    OvzBrouwer($conn);
?>