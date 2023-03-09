<!DOCTYPE html>
<html>
  <head>
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="Oskar.php">Oskar</a></li>
        </ul>
    </header>
    <main>
    <h2>HTML Forms</h2><br>

<form action="action_page.php" method="POST">
    <label for="uname">Username:</label><br>
    <input type="text" minlength="5" id="uname" name="uname" value="John" required><br>
    <label for="pwrd">password:</label><br>
    <input type="password" id="pwrd" name="pwrd" value="Doe" required><br><br>
    <input type="submit" value="Submit">
</form> 

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

    </main>
    <footer>
    </footer>
  </body>
</html>