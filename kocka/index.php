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
        echo '<img src="egy.jpg" />';
        break;
    case 2:
        echo '<img src="ketto.jpg" />';
        break;
    case 3:
       echo '<img src="harom.jpg" />';
        break;
    case 4:
        echo '<img src="negy.jpg" />';
        break;
    case 5:
        echo '<img src="ot.jpg" />';
        break;
    case 6:
        echo '<img src="hat.jpg" />';
        break;
}
        ?>
    </body>
</html>