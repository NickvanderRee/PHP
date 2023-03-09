<?php
//Auteur: Nick van der Ree
function ConnectDb(){
    try{
        $conn = new PDO("mysql:host=localhost;dbname=bieren", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        echo "Connected!";
    } 
    
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}

//Haalt de data uit de database.
function GetData($table){
    $conn = ConnectDb();

    $query = $conn->prepare("SELECT * FROM $table");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//Laat de tabel zien met de opgevraagde data
function PrintTable($result){
    echo "<table border = 1px>";
    echo "<tr>";
    foreach($result[0] as $column_name => $cell){
        echo "<th>".$column_name."</th>";
    }
    echo "</tr>";
    foreach ($result as $row) {
        
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>" . $cell . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

//Selecteerd de brouwers in de database.
function GetBrouwers(){
    $result = GetData("brouwer");

    echo "Overzicht van alle brouwers: ";

    echo "<br>";
    echo "<br>";

    PrintTable($result);
}

//Selecteert de bieren in de database.
function GetBieren(){
    $result = GetData("bier");

    echo "Overzicht van alle bieren: ";

    echo "<br>";
    echo "<br>";

    PrintTable($result);
}
?>