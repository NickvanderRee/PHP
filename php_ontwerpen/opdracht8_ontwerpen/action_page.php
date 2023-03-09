<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <?php
        echo "Today's date is: " . date("Y-m-d");
        echo "<br><br>";

        echo "<table>";
            echo "<tr>";
                echo "<td>" . "Username: " . "</td>";
                echo "<td>" . $_POST["uname"]  . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>" . "Password: " . "</td>";
                echo "<td>" . $_POST["pwrd"]  . "</td>";
            echo "</tr>";
        echo "</table>";
        echo "<br><br>";
        
        $a = array("Jan", "Rob", "Piet");
        echo "<table>";
            foreach($a as $value){
                echo "<tr>";
                    echo "<td>" . "$value" . "</td>";
                echo "</tr>";
            }
        echo "</table>";
        echo "<br><br>";

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
</html>