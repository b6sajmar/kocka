<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action=index.php method="post">
            <div>
            <label for="dobasszam">Hány oldalú kocka legyen? </label>
            <input type="text" name="dobasszam" id="dobasszam">
            <br>
            <input type="submit" value="Elküld">
            </div>
        </form>
        <?php
			// függvények kezdete
			include("fuggvenyek.php");
			$sorsolt=dobas();
			//var_dump($sorsolt);
			// függvények vége
			echo "A dobott szám:".$sorsolt;
			switch ($sorsolt) {
    case 1:
        echo '<img src="egy.png" />';
        break;
    case 2:
        echo '<img src="ketto.png" />';
        break;
    case 3:
       echo '<img src="harom.png" />';
        break;
    case 4:
        echo '<img src="negy.png" />';
        break;
    case 5:
        echo '<img src="ot.png" />';
        break;
    case 6:
        echo '<img src="hat.png" />';
        break;
}
        ?>
    </body>
</html>