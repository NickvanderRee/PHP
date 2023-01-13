<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
Bedrag exclusief BTW: <input type="text" name="bedrag"><br>
<input type="radio" name="btw" value="0.06">laag tarief - 6%<br>
<input type="radio" name="btw" value="0.19" checked>hoog tarief - 19%<br>
<input type="submit" value="Bereken BTW">
</form>

<hr>
<?php
$exbtw = $_POST['bedrag'];
$tarief = $_POST['btw'];
$btw = round(($tarief * $exbtw),2);
$inclusiefbtw = $exbtw + $btw;

if(empty($_POST['bedrag'])){
    echo "Voer een bedrag in.";
}
else{
    echo "Bedrag inclusief BTW: <b> $inclusiefbtw euro</b><br>";
    echo "De BTW bedraagt: <b> $btw euro</b>";
}

?>