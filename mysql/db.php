<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos</title>
</head>
<body>
    <?php
    //inconveniente con usar include, que solo echa warnings
    //include "conn/conn.php";

    //es mejor usar require
    require "conn/conn.php";

    print "Nos conectamos exitosamente a la base de datos"
    ?>
</body>
</html>