<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagenes Dioses</title>
</head>
<body>
    <?php
    $dios=$_GET["dios"];
    $path="imagenes/";
    $dioses=array("","afrodita","atenea","hades","poseidon","zeus");
    $archivo=$path.$dioses[$dios].".jpg";
    ?>
    <img src="<?php print $archivo; ?>" />
    <p><?php print $dioses[$dios]; ?> </p>
</body>
</html>