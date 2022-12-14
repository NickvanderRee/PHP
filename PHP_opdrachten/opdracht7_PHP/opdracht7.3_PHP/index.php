</head>
<body>
    <form action="#" method="post">
    <input type="radio" name="kleur" value="rood">Rood
    <input type="radio" name="kleur" value="groen">Groen
    <input type="radio" name="kleur" value="blauw">Blauw
    <input type="radio" name="kleur" value="roze">Roze
    <input type="submit" name="instellen" value="instellen">
    </form>

    <?php

    if(isset($_POST["kleur"])) {
    $kleur = $_POST["kleur"];

    switch($kleur){
        case"rood":
            echo"<style>body{background-color: red;}</style>";
        break;

        case"groen":
            echo"<style>body{background-color: green;}</style>";
        break;

        case"blauw":
            echo"<style>body{background-color: blue;}</style>";
         break;

        case"roze":
            echo"<style>body{background-color: pink;}</style>";
        break;
    }}
    ?>
</body>
</html>