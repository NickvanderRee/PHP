<?php 
    //Auteur: Nick
    //Laat alle bieren in de database zien

    //Initialisatie
    include 'functions.php';

    //Main

    //Verbind met database
    $conn = ConnectDB();

    //Print bieren
    OvzBieren($conn);

?>