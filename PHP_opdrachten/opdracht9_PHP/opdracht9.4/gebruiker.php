<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
    $query = $db->prepare("INSERT INTO gebruikers(username, password) VALUES ('Admin', '" . sha1('Pass!2023') . "')");

    if($query->execute()){
        echo "De nieuwe gegevens zijn toegevoegd.";
    } else{
        "Er is een fout opgetreden.";
    }
} catch(PDOException $e){
    die("ERROR!: " . $e->getMessage());
}
?>