<html>
    <form>
        Tekst:<input type="text" name="input"> <br>
        <input type="radio" name="hoofdletters">In hoofdletters <br>
        <input type="radio" name="kleine-letters">In kleine letters <br>
        <input type="radio" name="1ste-letter-zin">Eerste letter van een zin is een hoofdletter <br>
        <input type="radio" name="1ste-letter-woord">Eerste letter van elk woord is een hoofdletter <br>
        <input type="submit" name="submit" value="weergeven">
    </form>
</html>
<?php
    echo $_REQUEST['input'];
?>