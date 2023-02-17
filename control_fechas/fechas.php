<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
</head>
<body>
    <?php
    //numero de segundos desde el 1/1/1970
    date_default_timezone_set("America/Argentina/Jujuy");
    $t = time();
    $fecha= date("d/m/Y H:i:s",$t);
    print $fecha;

    /*//checkdate
    $fecha="27/10/1999";

    //arreglo con la Fecha
    $aFecha=explode("/",$fecha);

    if(count($aFecha)!=3){
        print "Error";
    }

    foreach($aFecha as $valor){
        $valor = intval($valor);
        if($valor<1){
            print "error";
        }
    }

    if(checkdate($aFecha[1],$aFecha[0],$aFecha[2])==false){
        print "error";
    }*/
    ?>
</body>
</html>