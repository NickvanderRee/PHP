<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
startkapitaal  <input type="text" name="startkapitaal" value="0"><br>
rente percentage  <input type="text" name="rente" value="0"><br>
jaarlijkse opnamen:  <input type="text" name="jaarlijkseopnamen" value="0"><br><br>
<input type="submit" name="looptijd" value="bereken de looptijd">
</form>

<?php
$startkapitaal = $_POST['startkapitaal'];
$rente = $_POST['rente'];
$jaarlijkseopnamen = $_POST['jaarlijkseopnamen'];
 
for ($loopcounter = 0; $startkapitaal > 0, $loopcounter <= 100; $loopcounter++) {
    $startkapitaal * (1 + 0.01 * $rente) - $jaarlijkseopnamen;
}
 
if (empty($_POST['bedrag'])) {
    echo "Voer een bedrag in.";
   }
elseif ($loopcounter > 100) {
    echo "U kunt uw hele leven lang opnemen";
}
else {
    echo "U kunt $loopcounter jaar lang $jaarlijkseopnamen opnemen";
}