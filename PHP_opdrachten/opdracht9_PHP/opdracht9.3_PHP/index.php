<?php
    try{
        $db = new PDO("mysql:host=localhost;dbname=studenten_cijfers", "root","");
        $query = $db->prepare("SELECT * FROM cijfers");
        $query -> execute();
        $result = $query -> fetchAll (PDO::FETCH_ASSOC);
        echo "<table>";
        echo "<tr>";
        echo "<td>" . "leerling" . "</td>";
        echo "<td>" .  "cijfer" . "</td>";
        echo "</tr>";
            foreach($result as &$data){
                echo "<tr>";
                echo "<td>" . $data["leerling"] . "</td>";
                echo "<td>" . $data["cijfer"] . "</td>";
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