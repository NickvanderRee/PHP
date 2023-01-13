<?php
    try{
        $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root","");
        $query = $db->prepare("SELECT * FROM fietsen");
        $query -> execute();
        $result = $query -> fetchAll (PDO::FETCH_ASSOC);
        echo "<table>";
            foreach($result as &$data){
                echo "<tr>";
                echo "<td>" . $data["merk"] . "</td>";
                echo "<td>" . $data["type"] . "</td>";
                echo "<td>" . $data["prijs"] . "</td>";
                echo "</tr>";
            }
        echo "</table>";
    }
    catch(PDOExeption $e){
        die("Error!:" . $e->getMessage());
    }
?>
<html>
    <style type="text/css">
        table {
            border-collapse: collapse;
            border: 1px solid black;
        }
        td {
            border: 1px solid black;
            width: 100px;
        }
    </style>
</html>