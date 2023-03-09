<?php 
    //Auteur: Nick
    //Alle functies voor main_bieren en main_brouwers

    function ConnectDB() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bieren";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $conn;
    }

    function OvzBieren($conn) {
        $query = $conn -> prepare("SELECT * FROM bier");
        $query -> execute();
        $result = $query -> fetchAll(PDO::FETCH_ASSOC);
        echo "<table>";
        echo "<tr>
        <td><strong>Code:</strong></td>
        <td><strong>Naam:</strong></td>
        <td><strong>Soort:</strong></td>
        <td><strong>Stijl:</strong></td>
        <td><strong>Alcohol:</strong></td>
        <td><strong>Brouwcode:</strong></td>
        </tr>";
    
    foreach($result as $row) {
        echo "<tr>";
        echo "<td>". $row['biercode'] ."</td>";
        echo "<td>". $row['naam'] ."</td>";
        echo "<td>". $row['soort'] ."</td>";
        echo "<td>". $row['stijl'] ."</td>";
        echo "<td>". $row['alcohol'] ."</td>";
        echo "<td>". $row['brouwcode'] ."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

    function OvzBrouwer($conn) {
        $query = $conn -> prepare("SELECT * FROM brouwer");
        $query -> execute();
        $result = $query -> fetchAll(PDO::FETCH_ASSOC);
        echo "<table>";
        echo "<tr>
        <td><strong>Brouwercode:</strong></td>
        <td><strong>Naam:</strong></td>
        <td><strong>Land:</strong></td>
        </tr>";
    
    foreach($result as $row) {
        echo "<tr>";
        echo "<td>". $row['brouwcode'] ."</td>";
        echo "<td>". $row['naam'] ."</td>";
        echo "<td>". $row['land'] ."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

?>

<style>
    table, tr, td {
        border: 1px solid black;
    }
</style>