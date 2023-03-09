<?php
        try {
        $db = new PDO("mysql:host=localhost;dbname=bieren", "root", "");
        $query = $db->prepare("SELECT * FROM bier");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        echo"<table>";
            echo "<tr>";
                echo "<td>" . "Bier Code " . "</td>";
                echo "<td>" . "Bier Naam " . "</td>";
                echo "<td>" . "Alcohol % " . "</td>";
            echo "</tr>";
            foreach($result as &$data) {
                echo "<tr>";
                    echo "<td>" . $data["biercode"] . "</td>";
                    echo "<td>" . $data["naam"] . "</td>";
                    echo "<td>" . $data["alcohol"] . "</td>";
                echo "</tr>";
            }
        echo"<table>";
        }   catch(PDOException $e) {
            die("Error!: " . $e->getMessage());
        }
    ?>