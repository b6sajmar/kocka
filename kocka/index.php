<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action=index.php method="post">
            <label for="dobas">Hány különbőző szám legyen? </label>
            <input type="text" name="dobas" id="dobas">
            <br>
        </form>
        <?php

        function dobas() {

            $dobasszam = $_GET['dobas'];
            $dobottszam = rand(1, $dobasszam);
            if (!isset($tomb[$dobottszam])) {
                $tomb[$dobottszam] = 1;
            }
            return $tomb;
            // var_dump($tomb);
        }
        ?>
    </body>
</html>
