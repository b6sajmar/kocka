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
			echo $sorsolt;
			
        ?>
    </body>
</html>