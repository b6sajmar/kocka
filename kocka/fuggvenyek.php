<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function dobas() {

            $dobasszam = $_POST['dobasszam'];
            $dobottszam = rand(1, $dobasszam);
            return $dobottszam;
        }
        ?>
    </body>
</html>
