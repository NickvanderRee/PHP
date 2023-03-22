<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inlog Scherm</title>
</head>
<body>
    <section class="form-container">
        <form method="post" action="">
            <label>Username:</label>
            <input type="text" name="username">

            <br>

            <label>Password:</label>
            <input type="password" name="password">

            <br>

            <input type="submit" name="inloggen" value="Inloggen">
        </form>
    </section>

    <?php
        try{

            $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");

            session_start();

            if(isset($_POST['inloggen'])){
                $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
                $password = sha1($_POST['password']);
                $query = $db->prepare("SELECT * FROM gebruikers WHERE username = :user AND password = :pass");
                $query->bindParam("user", $username);
                $query->bindParam("pass", $password);
                $query->execute();

                if($query->rowCount() == 1){
                    echo "Juiste gegevens!";
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    $_SESSION['login'] = True;
                    header('location: beveiligdepagina.php');
                } else {
                    $_SESSION['username'] = "";
                    $_SESSION['password'] = "";
                    $_SESSION['login'] = False;
                    echo "Onjuiste gegevens, wachtwoord of gebruikersnaam onjuist!";
                }

                echo "<br>";
            }
        } 
        
        catch(PDOException $e){
            die("Error!: " . $e->getMessage());
        }
    ?>
</body>
</html>